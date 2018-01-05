window.Vue = require('vue');
window.axios = require('axios');
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
  color: '#C0A062',
  failedColor: '#000000',
  thickness: '4px'
});

Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('lightbox', require('./components/Lightbox.vue'));
Vue.component('contact', require('./components/Contact.vue'));

new Vue({
    el: '#jeff',
    beforeCreate() {
        this.$Progress.start();
    },
    mounted() {
        setTimeout(() => {
            this.$Progress.finish();
        }, 1500);
    }
});
