const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/blocks/form.js', 'public/js')
    .js('resources/js/blocks/list.js', 'public/js')
    .js('resources/js/block_templates/load.js', 'public/js')
    .js('resources/js/block_templates/create.js', 'public/js/block_templates')
    // .js('resources/js/common.js', 'public/js')
    // .styles('resources/css/app.css', 'public/css')
    .sourceMaps();

mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css/')
;

