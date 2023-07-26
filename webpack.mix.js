const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some ild steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .react()
    .sass('resources/sass/app.scss', 'public/css');
// mix.copy('node_modules/@fullcalendar/core/main.js', 'public/js/fullcalendar.js')
//     .copy('node_modules/@fullcalendar/core/main.css', 'public/css/fullcalendar.css')
//     .copy('node_modules/@fullcalendar/daygrid/main.js', 'public/js/fullcalendar-daygrid.js')
//     .copy('node_modules/@fullcalendar/daygrid/main.css', 'public/css/fullcalendar-daygrid.css');
mix.copy('node_modules/@fullcalendar/core/main.js', 'public/js/fullcalendar.js')  // 間違っている
mix.copy('node_modules/@fullcalendar/core/main.min.js', 'public/js/fullcalendar.js')  // 正しい


    // .copy('node_modules/@fullcalendar/core/main.js', 'public/js/fullcalendar.js')
    // .copy('node_modules/@fullcalendar/daygrid/main.js', 'public/js/fullcalendar.js')
    // .copy('node_modules/@fullcalendar/core/main.css', 'public/css/fullcalendar.css')
    // .copy('node_modules/@fullcalendar/daygrid/main.css', 'public/css/fullcalendar.css');
 
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ])
    