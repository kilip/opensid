import Vue from 'vue'
import App from './components/App.vue'
import router from './router';
import store from './store';
import tailwindComponents from './tailwind';
import VueTailwind from "vue-tailwind";
import moment from 'moment';
import {Vuelidate} from "vuelidate";

Vue.use(VueTailwind, tailwindComponents);
Vue.filter('formatDate', function(value) {
  if (value) {
    return moment(String(value)).format('DD/MM/YYYY hh:mm')
  }
});
Vue.use(Vuelidate);

new Vue({
  store,
  router,
  el: '#app',
  render: h => h(App)
})
