const argv = require('yargs').argv;
const command = require('node-cmd');
const mix = require('laravel-mix');
const OnBuild = require('on-build-webpack');
const Watch = require('webpack-watch');
const bin = require('./tasks/bin');
const env = argv.e || argv.env || 'local';
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

// Every build
const plugins = [
    new OnBuild(() => {
        command.get(bin.path() + ' build ' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr);
                process.exit(1);
            }
            console.log(stdout);
        });
    }),
    new Watch({
        paths: ['source/**/*.md', 'source/**/*.php'],
        options: {
            ignoreInitial: true
        }
    })
];

mix
.webpackConfig({ plugins })
.setPublicPath('source')
.browserSync({
    proxy: 'https://jefffitzmaurice.test/',
    files: [
        './build_local/**/*.html',
        './build_local/**/*.js',
        './build_local/**/*.css'
    ]
})
.sass('source/_assets/sass/main.scss', 'source/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.js')]
    })
    .purgeCss()
    .version()
.js('source/_assets/js/main.js', 'source/js')
    .extract(['axios', 'vue', 'vue-progressbar', 'vue-gallery']);
