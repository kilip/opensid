import Vue from 'vue'
import App from './components/App.vue'
import router from './router';
import store from './store';
import tailwindComponents from './tailwind';
import VueTailwind from "vue-tailwind";

Vue.use(VueTailwind, tailwindComponents);

new Vue({
  store,
  router,
  el: '#app',
  render: h => h(App)
})
