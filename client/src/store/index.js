import Vue from "vue";
import Vuex from "vuex";

import artikel from "./artikel";
import kategori from "./kategori";
import config from './config';
import auth from './auth';
import dashboard from "./dashboard";
import notifications from "./notifications";

Vue.use(Vuex);

export const store = new Vuex.Store({
  modules: {
    notifications,
    dashboard,
    auth,
    artikel,
    kategori,
    config,
  }
});

export default store;
