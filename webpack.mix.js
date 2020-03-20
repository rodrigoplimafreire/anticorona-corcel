const mix = require('laravel-mix');
mix.setPublicPath('public'); mix.setResourceRoot('../');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.styles(['resources/css/animate.css', 'resources/css/custom.css'], 'public/css/custom.css')

const tailwindcss = require('tailwindcss')
mix.sass('resources/sass/tailwind.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ]
    })
