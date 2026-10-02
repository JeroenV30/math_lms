import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: ['resources/views/**', 'content/**', 'routes/**'],
            fonts: [
                // Interface
                bunny('Inter', {
                    alias: 'inter',
                    variable: '--font-inter',
                    weights: [400, 500, 600, 700],
                }),
                // Leestekst: rustige boektypografie
                bunny('Source Serif 4', {
                    alias: 'source-serif',
                    variable: '--font-source-serif',
                    weights: [400, 600],
                    styles: ['normal', 'italic'],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
