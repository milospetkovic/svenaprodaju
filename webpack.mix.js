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

mix.js(['resources/assets/js/app.js',
        'resources/assets/js/bootstrap.js',
        'resources/assets/js/elitasoft.js,',
        'resources/assets/vendor/inspinia/js/plugins/toastr/toastr.min.js'],
    'public/js/all.js');

mix.styles(['resources/assets/vendor/inspinia/css/plugins/toastr/toastr.min.css'],
        'public/css/all.css');
mix.sass('resources/assets/sass/app.scss', 'public/css/all.scss');
