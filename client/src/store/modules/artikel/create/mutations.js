import * as types from "./mutation_types";

export default {
  [types.ARTIKEL_CREATE_SET_ERROR](state, error) {
    Object.assign(state, { error });
  },

  [types.ARTIKEL_CREATE_TOGGLE_LOADING](state) {
    Object.assign(state, { error: "", isLoading: !state.isLoading });
  },

  [types.ARTIKEL_CREATE_SET_CREATED](state, created) {
    Object.assign(state, { created });
  },

  [types.ARTIKEL_CREATE_SET_VIOLATIONS](state, violations) {
    Object.assign(state, { violations });
  },

  [types.ARTIKEL_CREATE_RESET](state) {
    Object.assign(state, {
      created: null,
      error: "",
      isLoading: false,
      violations: null,
    });
  },
};
