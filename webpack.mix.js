let mix = require("laravel-mix");
require("laravel-mix-jigsaw");
require("mix-tailwindcss");

mix
  .jigsaw({
    watch: [
      "config.php",
      "source/**/*.md",
      "source/**/*.php",
      "source/**/*.scss",
      "!source/**/_tmp/*",
    ],
  })
  .disableNotifications()
  .setPublicPath("source/assets/build")
  // .js('source/_assets/js/main.js', 'js').vue()
  .postCss("source/_assets/css/main.css", "css", [require("tailwindcss")])
  .tailwind()
  .sourceMaps()
  .version();
