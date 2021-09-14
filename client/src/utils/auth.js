//import jwt from 'jsonwebtoken';
import Cookies from 'js-cookie';
import store from '../store';
import {mapActions} from "vuex";

export default {
  async ensureUserLoaded(){
    const user = store.state.auth.user;
    if(!user){
      await store.dispatch('auth/fetchUser');
    }
  },
  async checkLogin(){
    return this.ensureUserLoaded()
      .then(() => {
        const user = store.state.auth.user;
        return !!user;
       })
      ;
  },
  ...mapActions('auth', {
    fetchUser: 'fetchUser'
  })
}
