var elixir      = require('laravel-elixir'),
    jade        = require('laravel-elixir-jade'),
    livereload  = require('laravel-elixir-livereload');

elixir.config.sourcemaps = false;

elixir(function(mix) {
    // Styles
    mix.rubySass('style.sass', 'public/css');

    // Scripts
    mix.scripts([
            'jquery.min.js',
            'plugins/*.js',
            'magic.js'
            ], 'public/js/min/scripts.min.js', 'resources/assets/js');

    // Templates
    mix.jade({ src: '/assets/jade/', search: '**/*.jade' });

    mix.livereload();
});
