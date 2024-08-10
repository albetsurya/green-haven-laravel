const mix = require("laravel-mix");

mix.sass("resources/sass/app.scss", "public/css")
    .copyDirectory("resources/assets/images", "public/images")
    .options({
        processCssUrls: false,
    });
