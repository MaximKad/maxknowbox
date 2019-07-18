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

mix.styles([
  'resources/assets/calendar/bootstrap/bootstrap.min.css',
  'resources/assets/calendar/font-awesome/css/font-awesome.min.css'
], 'css/calendar.css')

mix.scripts([
  'resources/assets/calendar/bootstrap/bootstrap.min.css',
], 'css/calendar.js')
