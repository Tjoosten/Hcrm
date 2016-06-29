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
    mix.sass('app.scss');
    mix.scripts([
            '../../../node_modules/vue/dist/vue.js',
            '../../../node_modules/vue-resource/dist/vue-resource.js'
        ], 'public/js/vue.js');
});
