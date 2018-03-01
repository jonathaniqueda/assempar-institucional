let mix = require('laravel-mix');

mix.copyDirectory('resources/assets/css', 'public/css');
mix.copyDirectory('resources/assets/js', 'public/js');
mix.copyDirectory('resources/assets/img', 'public/img');
mix.copyDirectory('resources/assets/fonts', 'public/fonts');
mix.copyDirectory('resources/assets/forms', 'public/forms');