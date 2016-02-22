var elixir = require('laravel-elixir'),
    jade = require('laravel-elixir-jade'),
    livereload = require('laravel-elixir-livereload'),
    bw = '../../../public/bower/';


elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass([
        'handsome.sass'
    ], 'public/css/handsome.css');
});

elixir(function(mix) {
    mix.scripts([
        bw + 'jquery/dist/jquery.js',
        'magic.js'
    ], 'public/js/magic.js');
});

elixir(function(mix) {
    mix.jade({
        search: '**/**/*.jade',
        src: '/assets/jade/'
    });
});

elixir(function(mix) {
    mix.livereload();
});
