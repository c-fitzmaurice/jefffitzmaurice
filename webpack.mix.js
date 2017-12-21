const argv = require('yargs').argv;
const command = require('node-cmd');
const mix = require('laravel-mix');
const OnBuild = require('on-build-webpack');
const Watch = require('webpack-watch');
const tailwind = require('tailwindcss');
const glob = require('glob-all');
const purgeCss = require('purgecss-webpack-plugin');
const bin = require('./tasks/bin');
const env = argv.e || argv.env || 'local';

// Every build
let plugins = [
    new OnBuild(() => {
        command.get(bin.path() + ' build ' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr);
                process.exit(1);
            }
            console.log(stdout);
        });
    })
]

// Production build
if (mix.inProduction()) {
    plugins.push(
        new purgeCss({
            paths: glob.sync([
                path.join(__dirname, 'source/**/*.blade.php'),
                path.join(__dirname, 'source/_assets/js/**/*.vue')
            ]),
            extractors: [
                {
                    extractor: class {
                        static extract(content) {
                            return content.match(/[A-z0-9-:\/]+/g);
                        }
                    },
                    extensions: ['html', 'js', 'php', 'vue']
                }
            ]
        })
    );
} else {
// Dev build
    plugins.push(
        new Watch({
            paths: ['source/**/*.md', 'source/**/*.php'],
            options: { ignoreInitial: true }
        })
    );
}

mix.webpackConfig({ plugins });
mix.setPublicPath('source');
mix.browserSync('https://jeff.dev');

// SCSS
mix.sass('source/_assets/sass/main.scss', 'source/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('tailwind.js'),
        ]
    }).version();

// JavaScript
mix.js('source/_assets/js/main.js', 'source/js')
    .extract(['vue', 'vue-progressbar']);
