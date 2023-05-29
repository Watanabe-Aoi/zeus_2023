import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = {
   state: {
      logining: false,
      user_name: '',
      user_id: '',
   },

   mutations: {
      login(state) {
         state.logining = true;
      },
      logout(state) {
         state.logining = false;
      },
   }
};

export default new Vuex.Store(store);