var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
		'vendor/css/bootstrap.min.css',
		'vendor/css/jquery.bxslider.css',
		'vendor/css/lightbox.min.css',
		'vendor/css/font-awesome.min.css',
		'vendor/css/jquery.directional-hover.min.css',
		'vendor/css/jquery.social-buttons.css',
		'vendor/css/froala_editor.min.css',
		'css/main.css',
		'css/appback.css'
	],'public/output/final.css','resources/assets');
	mix.scripts([
		'vendor/js/jquery.min.js',
		'vendor/js/bootstrap.min.js',
		'vendor/js/jquery.bxslider.js',
		'vendor/js/lazyload.js',
		'vendor/js/jquery.directional-hover.min.js',	
		'vendor/js/lightbox.min.js',
		'vendor/js/jquery.social-buttons.js',
		'vendor/js/froala_editor.min.js',
		'js/main.js',
		'js/appback.js'
	],'public/output/final.js','resources/assets');
	mix.copy('resources/assets/img','public/img');
	mix.copy('resources/assets/vendor/images','public/output/images');
	mix.copy('resources/assets/fonts','public/fonts');
});
