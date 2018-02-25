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

/*mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');*/

mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/vendor/css')
	.copy('node_modules/font-awesome/fonts', 'public/vendor/fonts')
	.sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/vendor/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
      processCssUrls: false
    })
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/jqBootstrapValidation.js', 'public/vendor/js')
    .js('resources/assets/js/contact_me.js', 'public/js');
mix.version();