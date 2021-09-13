import Vue from "vue";
import Vuex from "vuex";

import artikel from './modules/artikel/';
import kategori from './modules/kategori';

Vue.use(Vuex);

export const store = new Vuex.Store({
  modules: {
    artikel,
    kategori
  }
});

export default store;
