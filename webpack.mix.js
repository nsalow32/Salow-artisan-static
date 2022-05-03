const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/assets/js/main.js', 'js')
    .sass('source/assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
    })
    .version();
