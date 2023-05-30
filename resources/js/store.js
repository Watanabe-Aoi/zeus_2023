import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = {
    state: {
                new_book:[],

            },

            mutations:{
                confirmInsertBook(state, new_book){
                    state.new_book = new_book;
                    },
                    login(state, user) {
                     state.logining = true;
                     state.user_id = user.id;
                  },
                  logout(state) {
                     state.logining = false;
                     state.user_id = '';
                  },
            }




   }

export default new Vuex.Store(store);
