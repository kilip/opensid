import { getField }from 'vuex-map-fields';

const TYPE_TOGGLE_SIDEBAR = 'toggle_sidebar';

const state = {
  sideBarOpen: false,
  showDropDown: false,
};

const toggleSidebar = ({commit}) => {
  commit(TYPE_TOGGLE_SIDEBAR);
};

export default {
  namespaced: true,
  state,
  actions: {
    toggleSidebar
  },
  mutations: {
    [TYPE_TOGGLE_SIDEBAR](state) {
      const sideBarOpen = !state.sideBarOpen
      Object.assign(state, { sideBarOpen });
    }
  },
  getters: {
    getField
  }
}
