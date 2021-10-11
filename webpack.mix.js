const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/views/components/header/client-header.styles.scss', 'public/css')
    .sass('resources/views/declaimer/declaimer.styles.scss', 'public/css')
    .sass('resources/views/client/client.styles.scss', 'public/css')
    .sass('resources/views/client/profile/profile.styles.scss', 'public/css')
    .sass('resources/views/client/profile/edit-profile.styles.scss', 'public/css')
    .sass('resources/views/client/profile/edit-details.styles.scss', 'public/css')
    .sass('resources/views/client/profile/unverified-account.styles.scss', 'public/css')
    .sass('resources/views/client/profile/no-funds.styles.scss', 'public/css')
    .sass('resources/views/components/price-chat/price-chat.styles.scss', 'public/css');
