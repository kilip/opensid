import { ENTRYPOINT } from '../../config/entrypoint';

const ACTIONS = {
  TOGGLE_LOADING: 'TOGGLE_LOADING',
  LOGIN_SUCCESS: 'LOGIN_SUCCES',
  LOGIN_FAILURE: 'LOGIN_FAILURE',
  LOGGING_OUT: 'LOGGING_OUT',
  LOGOUT_SUCCESS: 'LOGOUT_SUCCESS',
  LOGOUT_FAILURE: 'LOGOUT_FAILURE',
};

const initialState = () => ({
  user: null,
  loggedIn: false,
  isLoading: false,
});

export default {
  namespaced: true,
  actions: {
    login: ({commit}, payload) => {
      commit(ACTIONS.TOGGLE_LOADING, true);
      const options = {
        method: 'POST',
        body: JSON.stringify(payload),
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json'
        }
      };
      const uri = new URL('/login-check', ENTRYPOINT);
      return fetch(uri, options)
        .then(response => response.json())
        .then(data => {

        })
        ;
    }
  },
  mutations: {
    [ACTIONS.TOGGLE_LOADING]: (state, loading) => {
      Object.assign(state, { error: '', isLoading: !state.isLoading });
    }
  }
}
