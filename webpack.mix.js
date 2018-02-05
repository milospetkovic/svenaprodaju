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

mix.copy('resources/assets/js/app.js', 'public/js/');
mix.copy('resources/assets/js/bootstrap.js', 'public/js/');
mix.copy('resources/assets/js/elitasoft.js', 'public/js/');


mix.copy('resources/assets/css/dashboard.css', 'public/css/');


