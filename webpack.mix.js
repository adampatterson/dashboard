let mix = require('laravel-mix')

require('laravel-mix-purgecss')

let scssOptions = {
    processCssUrls: true,
    fileLoaderDirs: {
        images: '/assets/images',
        fonts: '/assets/fonts'
    }
}

let extractLibs = [
    'jquery',
    'bootstrap',
]

mix.autoload({
    'jquery': ['$', 'window.jQuery', 'jQuery']
})

mix.setResourceRoot('../../')
   .setPublicPath('./')
   .sass('resources/scss/dashboard.scss', 'assets/css')
   .options(scssOptions)

   .js('resources/js/dashboard.js', 'assets/js')
   .extract(extractLibs)

   .version()

// Production
if (mix.inProduction()) {
    mix.options({
        terser: {
            terserOptions: {
                warnings: false
            }
        }
    })
} else {
    mix.webpackConfig({
        devtool: 'source-map',
    })

    mix.sourceMaps()
}