let mix = require('laravel-mix');

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

mix.disableNotifications()
   .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/register.scss', 'public/css')
   .options({
        postCss: [
            require('autoprefixer')
        ]
      })
  .sourceMaps(false)
  .browserSync({
    port: 9999,
    files: 'public/**/*',
    server: 'public',
    proxy: false
  });
