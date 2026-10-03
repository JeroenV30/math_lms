import fs from 'node:fs';
import path from 'node:path';
import katex from 'katex';

// Controleer de notatie in gepubliceerde lessen, opgaven en formulekaarten.
// Dit controleert LaTeX-syntax; de inhoudelijke juistheid vraagt auteurscontrole.
const root = path.join(import.meta.dirname, '..', 'content', 'modules');
let count = 0;
const errors = [];

function check(formula, file) {
    try {
        katex.renderToString(formula, { throwOnError: true, strict: 'ignore' });
        count++;
    } catch (error) {
        errors.push(`${file}: ${error.message}`);
    }
}

function strings(value, file) {
    if (typeof value === 'string') return [value];
    if (!value || typeof value !== 'object') return [];
    if (typeof value.latex === 'string') check(value.latex, file);
    return Object.values(value).flatMap(item => strings(item, file));
}

for (const directory of fs.readdirSync(root)) {
    const modulePath = path.join(root, directory);
    const metadataFile = path.join(modulePath, 'module.json');
    if (!fs.existsSync(metadataFile)) continue;
    if (JSON.parse(fs.readFileSync(metadataFile, 'utf8')).status !== 'available') continue;

    for (const filename of fs.readdirSync(modulePath).filter(file => /\.(md|json)$/.test(file))) {
        const file = path.join(modulePath, filename);
        const raw = fs.readFileSync(file, 'utf8');
        const values = filename.endsWith('.json') ? strings(JSON.parse(raw), file) : [raw];
        for (const value of values) {
            for (const match of value.matchAll(/\$\$([\s\S]*?)\$\$|\$([^$\n]+)\$/g)) {
                check(match[1] ?? match[2], file);
            }
        }
    }
}

if (errors.length) {
    console.error(errors.join('\n'));
    process.exitCode = 1;
} else {
    console.log(`${count} formules geldig voor KaTeX.`);
}
