const mix = require('laravel-mix');
const mixguest = require('laravel-mix');

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
mixguest
	.js([
		'resources/js/guest/bootstrap.min.js',
		'resources/js/guest/lightbox.min.js',
		'resources/js/guest/wow.min.js',
		'resources/js/guest/main.js',
		],'public/js/guest.js')
   	.styles([
   		'resources/css/guest/bootstrap.min.css',
   		'resources/css/guest/animate.min.css',
   		'resources/css/guest/lightbox.css',
   		'resources/css/guest/main.css',
   		'resources/css/guest/responsive.css',
   		],'public/css/guest.css');

mix
	.js([
			'resources/js/toastr.js',
		],'public/js/app.js')
   	.styles([
   		'resources/css/bootstrap.css',
   		'resources/css/toastr.css',
   		], 'public/css/app.css');
