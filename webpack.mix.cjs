const mix = require("laravel-mix");

mix.sass("resources/sass/app.scss", "public/css")
    .js("resources/js/tabs.js", "public/js")
    .copyDirectory("resources/assets/images", "public/images")
    .options({
        processCssUrls: false,
    });
