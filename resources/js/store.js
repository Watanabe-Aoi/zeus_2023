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
      login(state, user) {
         state.logining = true;
         state.user_id = user.id;
         state.user_name = user.name;
      },
      logout(state) {
         state.logining = false;
         state.user_id = '';
         state.user_name = '';
      },
   }
};

export default new Vuex.Store(store);