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

mix.js('resources/js/app.js', 'public/assets/js')
    // .js('resources/js/scripts.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')        ;
    // .sass('resources/scss/custom.scss', 'public/assets/css')    ;
    // .sass('resources/scss/helper.scss', 'public/assets/css')
    // .sass('resources/scss/responsive.scss', 'public/assets/css')
    // .postCss('resources/css/header.css', 'public/assets/css');



/*
 .js('resources/js/scripts.js', 'public/assets/js')
 .postCss('resources/css/app.css', 'public/css', [
  require('postcss-custom-properties')
  ])*/
