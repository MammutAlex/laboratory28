const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'bootstrap.css',
        'font-awesome.min.css',
        'ionicons.css',
        'prettyPhoto.css',
        'YTPlayer.css',
        'jssocials.css',
        'jssocials-theme-flat.css',
        'preset.css',
        'animate.css',
        'style.css',
        'responsive.css'
    ]).webpack([
        'web/jquery.js',
        'web/bootstrap.js',
        'web/gmaps.js',
        'web/appear.js',
        'web/mixer.js',
        'web/wow.min.js',
        'web/jquery.sudoSlider.min.js',
        'web/jquery.easing.min.js',
        'web/jquery.easypiechart.js',
        'web/jquery.mb.YTPlayer.min.js',
        'web/jssocials.min.js',
        'web/theme.js'
    ]);
});
