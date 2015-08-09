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
    /*mix.less('app.less');*/

 mix.styles([
     'app.css',
     'main.css'

 ],'public/final/final.css','public/css');

 mix.scripts([
     'main.js',
     'ie/respond.min.js',
     'bootstrap.min.js',
     'jquery.min.js',
     'jquery.scroller.min.js',
     'jquery.scrolly.min.js',
     'jquery.scrollzer.min.js',
     'skel.min.js',
    'util.js'
 ],'public/final/final.js','public/js');

mix.version(['public/final/final.css','public/final/final.js']);


});
