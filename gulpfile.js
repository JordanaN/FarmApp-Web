
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass([
        ])
});

elixir(function(mix){
    mix.scripts([
        'jquery-2.2.3.min.js',
        'bootstrap.min.js'
        ]);
});

elixir(function(mix){
    mix.styles([
        'bootstrap.min.css',
       'customizer.css'
        ])
});