window.Vue = require('vue');
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
  color: '#C0A062',
  failedColor: '#000000',
  thickness: '4px'
});

// auto require all single file components
const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

new Vue({
  el: '#jeff',
  beforeCreate() {
    this.$Progress.start();
  },
  mounted() {
    setTimeout(() => {
      this.$Progress.finish();
    }, 1000);

    // Replace X's with SVGs
    const nodes = document.querySelectorAll('.close');
    Object.values(nodes).forEach(a => a.innerHTML =
        `<svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
        </svg>`);
  },
});

