let mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix
    .postCss('resources/css/style.css', 'public/dist/css')
    .tailwind('./tailwind.js');

if (mix.inProduction()) {
    mix.version();

    mix.purgeCss({
        folders: [
            'resources/views'
        ],
        whitelistPatterns: [
        ],
        whitelistPatternsChildren: [
        ],
    });
}