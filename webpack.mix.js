let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */


if (process.env.APP_ENV !== "production") {
    mix.js('resources/js/script.js', 'public/js')
        .sass('resources/sass/style.scss', 'public/css')
        .browserSync({proxy: 'seeds.test', notify: false});
} else {
    mix.js('resources/js/script.js', 'public/js')
        .sass('resources/sass/style.scss', 'public/css')
        .version();
}
