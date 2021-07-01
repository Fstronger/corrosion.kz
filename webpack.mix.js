const mix = require('laravel-mix');
const paths = {
    site: {
        js: 'resources/assets/site/js',
        scss: 'resources/assets/site/scss',
        cache: 'public/site/cache'
    },
    admin: {
        scss: 'resources/assets/admin/scss',
        cache: 'public/avl/cache'
    }
}

/* Settings */
mix.options({
    autoprefixer: false,
    processCssUrls: false,
    postCss: [
        require('autoprefixer')({
            remove: false,
            overrideBrowserslist: ['last 10 versions']
        }),
        require('postcss-discard-comments')({removeAll: true})
    ],
    uglify: {
        uglifyOptions: {comments: false}
    }
});


/* Site styles */
mix.sass(`${paths.site.scss}/app.scss`, paths.site.cache);
mix.sass(`${paths.site.scss}/vendor.scss`, paths.site.cache, {processUrls: true});


/* Site scripts */
mix.copy('node_modules/jquery/dist/jquery.min.js', `${paths.site.cache}/jquery.js`);

mix.scripts([

    'node_modules/slick-carousel/slick/slick.min.js',

], `${paths.site.cache}/vendor.js`);

mix.js(`${paths.site.js}/app/app.js`, paths.site.cache);


/* Admin styles */
mix.sass(`${paths.admin.scss}/layout.scss`, paths.admin.cache);

/* Admin scripts */


/* BrowserSync */
// mix.browserSync({
//     proxy: 'http://project.loc'
// });


/* Versions */
if (mix.inProduction()) {
    mix.version();
}
