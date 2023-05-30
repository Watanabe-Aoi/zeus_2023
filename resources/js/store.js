import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = {
    state: {
                new_book:[],

                statusId:[
                    {
                        id: 1,
                        text: '保管中',
                    },
                    {
                        id: 2,
                        text: '貸出中',
                    },
                    {
                        id: 3,
                        text: '紛失',
                    },
                ],
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
