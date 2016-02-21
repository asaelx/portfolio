var elixir = require('laravel-elixir'),
    jade = require('laravel-elixir-jade'),
    livereload = require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.scripts([
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
