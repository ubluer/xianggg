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

// elixir((mix) => {
//     mix.sass('app.scss')
//         .webpack('app.js');
// });

elixir((mix) => {
    mix.sass('./resources/assets/family/sass/family.scss','public/family/css')
        .webpack('./resources/assets/family/js/family.js','public/family/js');
});
