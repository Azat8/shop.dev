let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// admin layout
mix.styles([
    'node_modules/font-awesome/css/font-awesome.min.css',
    'node_modules/jasny-bootstrap/dist/css/jasny-bootstrap.min.css'
    ], 'public/css/admin-layout-plugin.css')
    .copy('node_modules/font-awesome/fonts', 'public/fonts');

mix.js([
    'node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
    'node_modules/jasny-bootstrap/js/fileinput.js',
    'node_modules/holderjs/holder.min.js'
], 'public/js/admin-layout-plugin.js');