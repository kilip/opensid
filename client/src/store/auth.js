import {ENTRYPOINT} from "../config/entrypoint";
import { getField } from "vuex-map-fields";

const TYPE_LOGGING_IN = 'loggingIn';
const TYPE_LOGIN_SUCCESS = 'login_success';
const TYPE_LOGIN_FAILURE = 'login_failure'
const TYPE_FETCHING_USER = 'fetch_user';
const TYPE_FETCH_USER_SUCCESS = 'fetch_user_success';
const TYPE_FETCH_USER_FAILURE = 'fetch_user_failure';
const TYPE_LOGGING_OUT = 'loggingOut';
const TYPE_LOGOUT_SUCCESS = 'logout_success';
const TYPE_LOGOUT_FAILURE = 'logout_failure'

const initialState = {
  loading: false,
  loggedIn: false,
  token: null,
  user: null,
  error: null
};

const login = async ({commit}, payload) => {
  commit(TYPE_LOGGING_IN, true);

  const uri = new URL('/login-check', ENTRYPOINT);
  const body = JSON.stringify(payload);

  const options = {
    method: 'POST',
    body,
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json'
    }
  };

  return await fetch(uri,options)
    .then((response) => {
      if(401 === response.status){
        const error = 'Username/email atau password anda salah.';
        commit(TYPE_LOGIN_FAILURE, error)
      }
      if(204 === response.status){
        commit(TYPE_LOGIN_SUCCESS, true)
      }
    });
}

const logout = async({commit}, payload) => {
  commit(TYPE_LOGGING_OUT, true);
  const uri = new URL('/logout', ENTRYPOINT);

  const options = {
    method: 'GET'
  };
  return await fetch(uri, options)
    .then(() => {
      commit(TYPE_LOGOUT_SUCCESS);
      commit(TYPE_LOGGING_OUT, false);
    });
};

const fetchUser = async ({commit})=> {
  commit(TYPE_FETCHING_USER, true);
  const uri = new URL(ENTRYPOINT + '/user/profile', ENTRYPOINT);
  const options = {
    method: 'GET',
    headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json'
    }
  };
  return await fetch(uri, options)
    .then(response => {
      commit(TYPE_FETCHING_USER, false);
      if(200 === response.status){
        return response.json();
      }
    })
    .then(user => {
      if(user){
        commit(TYPE_FETCH_USER_SUCCESS, user);
      }
      return user;
    });
};

const mutations = {
  [TYPE_LOGGING_IN](state, loading){
    Object.assign(state, {
      loading
    })
  },
  [TYPE_LOGIN_FAILURE](state, error){
    Object.assign(state, { error })
  },
  [TYPE_LOGIN_SUCCESS](state, loggedIn){
    Object.assign(state, {loggedIn})
  },
  [TYPE_FETCHING_USER](state, loading){
    Object.assign(state, { loading })
  },
  [TYPE_FETCH_USER_SUCCESS](state, user){
    Object.assign(state, { user });
  },
  [TYPE_FETCH_USER_FAILURE](state, error){
    Object.assign(state, { error });
  },
  [TYPE_LOGGING_OUT](state, loading){
    Object.assign(state, { loading });
  },
  [TYPE_LOGOUT_SUCCESS](state){
    const user = null;
    Object.assign(state, { user });
  },
  [TYPE_LOGOUT_FAILURE](state, error){
    Object.assign(state, { error });
  }
};



export default {
  namespaced: true,
  state: initialState,
  actions: {
    login,
    logout,
    fetchUser
  },
  mutations,
  getters: {
    getField
  }
}
