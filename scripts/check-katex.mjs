// Controleert of alle formules in de cursusinhoud door KaTeX gerenderd kunnen worden.
// Gebruik: node scripts/check-katex.mjs [moduleprefix, bijv. 15]
// Controleert alle cursussen (content/domains/<id>/modules); meldingen van andere cursussen dan wiskunde beginnen met het domein.
import fs from 'node:fs';
import path from 'node:path';
import katex from 'katex';

const domainsRoot = path.resolve(import.meta.dirname, '..', 'content', 'domains');
const only = process.argv[2];
const errors = [];
let count = 0;

// Zelfde afbakening als App\Services\MarkdownRenderer: $$…$$ (blok) en $…$ (inline), \$ is een letterlijk dollarteken.
function formulas(text) {
    const out = [];
    const display = /\$\$([\s\S]+?)\$\$/g;
    const rest = String(text).replace(display, (_, f) => { out.push([f, true]); return ' '; });
    for (const m of rest.matchAll(/(?<![\\$])\$(?!\s)([^$\n]+?)(?<![\s\\])\$/g)) out.push([m[1], false]);
    return out;
}

function check(where, text) {
    for (const [f, displayMode] of formulas(text)) {
        count++;
        try {
            katex.renderToString(f, { displayMode, throwOnError: true, strict: 'ignore' });
        } catch (e) {
            errors.push(`${where}: ${e.message.split('\n')[0].slice(0, 120)}`);
        }
    }
}

const courses = fs.readdirSync(domainsRoot).filter((d) => fs.existsSync(path.join(domainsRoot, d, 'modules'))).sort();
const moduleDirs = courses.flatMap((course) => fs.readdirSync(path.join(domainsRoot, course, 'modules')).sort()
    .map((dir) => ({ base: path.join(domainsRoot, course, 'modules', dir), dir: course === 'wiskunde' ? dir : `${course}/${dir}` })));

for (const { base, dir } of moduleDirs) {
    if (only && !path.basename(base).startsWith(only.padStart(2, '0'))) continue;
    for (const file of fs.readdirSync(base)) {
        const full = path.join(base, file);
        if (file.endsWith('.md')) check(`${dir}/${file}`, fs.readFileSync(full, 'utf8'));
        if (['exercises.json', 'quiz.json', 'module.json'].includes(file)) {
            const data = JSON.parse(fs.readFileSync(full, 'utf8'));
            const items = [...(data.exercises ?? []), ...(data.questions ?? [])];
            for (const e of items) {
                const texts = [e.question, e.context, ...(e.hints ?? []), ...(e.solution ?? []), ...(e.feedback ?? []).map((f) => f.message)];
                texts.filter(Boolean).forEach((t) => check(`${dir}/${e.id}`, t));
            }
            if (file === 'module.json') {
                [...(data.learning_goals ?? []), ...(data.glossary ?? []).flatMap((g) => [g.term, g.definition]), ...(data.formulas ?? []).flatMap((f) => [f.name, f.usage, f.origin])]
                    .filter(Boolean).forEach((t) => check(`${dir}/module.json`, t));
                (data.formulas ?? []).forEach((f) => f.latex && check(`${dir}/module.json formule`, `$$${f.latex}$$`));
            }
        }
    }
}

console.log(`${count} formules gecontroleerd, ${errors.length} fouten`);
errors.slice(0, 40).forEach((e) => console.log('  ' + e));
process.exit(errors.length ? 1 : 0);
