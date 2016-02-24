var elixir     = require('laravel-elixir'),
    jade       = require('laravel-elixir-jade'),
    livereload = require('laravel-elixir-livereload'),
    sprite     = require('laravel-elixir-svg-symbols'),
    bw = '../../../public/bower/',
    rs = '../../../resources/assets/';

elixir.config.sourcemaps = false;

// Theme
elixir(function(mix) {
    mix.sass([
        'themes/portfolio/handsome.sass',
        bw + 'highlightjs/styles/monokai-sublime.css'
    ], 'public/css/themes/portfolio/handsome.css');
});

elixir(function(mix) {
    mix.scripts([
        bw + 'jquery/dist/jquery.js',
        bw + 'highlightjs/highlight.pack.js',
        'themes/portfolio/magic.js'
    ], 'public/js/themes/portfolio/magic.js');
});

// Admin
elixir(function(mix) {
    mix.sass([
        'admin/admin.sass',
        bw + 'typicons.font/src/font/typicons.css',
        rs + 'css/dropdowns.css',
        bw + 'bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
        bw + 'select2/src/scss/core.scss',
        rs + 'scss/twemoji-awesome.scss',
        '../css/dropzone.css',
        '../css/editor.css'
    ], 'public/css/admin.css');
});

elixir(function(mix) {
    mix.scripts([
        bw + 'jquery/dist/jquery.min.js',
        bw + 'autosize/dist/autosize.min.js',
        bw + 'date.format/date.format.js',
        bw + 'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        bw + 'select2/dist/js/select2.js',
        'dropzone.js',
        'ghostdown.js',
        'admin.js'
    ], 'public/js/admin.js');
});

elixir(function(mix) {
    mix.jade({
        search: '**/**/**/*.jade',
        src: '/assets/jade/'
    });
});

elixir(function(mix) {
    mix.svgSprite();
});

elixir(function(mix) {
    mix.livereload();
});
