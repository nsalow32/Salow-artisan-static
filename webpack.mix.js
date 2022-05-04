const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .imagemin({
        from: 'source/assets/images/**/*.*',
        to: 'images/[name].[ext]',
    })
    .version();



mix.webpackConfig({
        plugins: [
            build.jigsaw,
            build.browserSync(),
            build.watch([
                'config.php',
                'source/**/*.md',
                'source/**/*.php',
                'source/**/*.scss',
            ]),
        ],
        module: {
            rules: [
                {
                    test: /\.(jpe?g|png)$/i,
                    loader: 'responsive-loader',
                    options: {
                        sizes: [150, 300, 600, 900, 1200],
                        name: "[name]-[width].[ext]",
                        outputPath: 'images/sizes',
                        adapter: require('responsive-loader/sharp')
                    },
                }
            ]
        },
    });