window.Vue = require('vue');
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
  color: '#C0A062',
  failedColor: '#000000',
  thickness: '4px'
});

// Vue.component('top-progress', require('./components/Progress.vue'));

new Vue({
    el: '#jeff',
    mounted() {
        this.$Progress.start();
        setTimeout(() => {
            this.$Progress.finish();
        }, 3000);
    }
});
