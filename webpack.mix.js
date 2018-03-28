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

mix.js('resources/assets/js/app.js', 'public/js').version();

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .version();

mix.styles([
        'resources/assets/pure-css/bootstrap.min.css',
        'resources/assets/pure-css/nucleo-icons.css',
        'resources/assets/pure-css/paper-kit.css',
        'resources/assets/pure-css/demo.css'
    ], 'public/css/all.css').version();

mix.scripts([
        'resources/assets/pure-js/jquery-3.2.1.js',
        'resources/assets/pure-js/jquery-ui-1.12.1.custom.min.js',
        'resources/assets/pure-js/popper.js',
        'resources/assets/pure-js/bootstrap.min.js',
        'resources/assets/pure-js/bootstrap-switch.min.js',
        'resources/assets/pure-js/nouislider.js',
        'resources/assets/pure-js/moment.min.js',
        'resourecs/assets/pure-js/masonry.pkgd.min.js'
    ], 'public/js/all.js').version();

mix.disableNotifications();