const mix = require('laravel-mix');

mix
    .js('assets/src/js/app.js', 'assets/dist/js')
    .sass('assets/src/scss/app.scss', 'assets/dist/css')
    .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],

    })
    // .browserSync({
    //     proxy: process.env.MIX_APP_HOST,
    //     host: process.env.MIX_APP_HOST,
    //     open: 'external',
    //     files: ['./**/*.php','./**/*.css','./**/*.js']
    // })