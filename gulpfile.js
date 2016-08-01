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
  mix.browserSync({
       proxy: 'homestead.app'
   });

    // Thema
    mix.sass('app.scss');


    mix.scripts([
            '../../../node_modules/vue/dist/vue.js',
            '../../../node_modules/vue-resource/dist/vue-resource.js'
        ], 'public/js/vue.js');

    // Copy fonts.
    mix.copy([
        'node_modules/font-awesome/fonts/FontAwesome.otf',
        'node_modules/font-awesome/fonts/fontawesome-webfont.eot',
        'node_modules/font-awesome/fonts/fontawesome-webfont.svg',
        'node_modules/font-awesome/fonts/fontawesome-webfont.ttf',
        'node_modules/font-awesome/fonts/fontawesome-webfont.woff',
        'node_modules/font-awesome/fonts/fontawesome-webfont.woff2'
    ],  'public/fonts');
});
