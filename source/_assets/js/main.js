import Vue from 'vue'
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
    color: '#C0A062',
    failedColor: '#000000',
    thickness: '4px',
});

// auto require all single file components
const files = require.context('./', true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split('/')
            .pop()
            .split('.')[0],
        files(key).default
    )
);

new Vue({
    el: '#jeff',
    beforeCreate() {
        this.$Progress.start();
    },
    mounted() {
        setTimeout(() => {
            this.$Progress.finish();
        }, 1000);
    },
});
