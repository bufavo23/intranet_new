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
/*'resources/js/app.js', .sass('resources/sass/app.scss', 'public/css')*/
mix.js([
		'resources/js/toastr.js',
		],'public/js/app.js')
   .styles([
   		'resources/css/bootstrap.css',
   		'resources/css/toastr.css',
   		], 'public/css/app.css');
