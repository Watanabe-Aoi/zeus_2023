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
                    }
            }
        }
export default new Vuex.Store(store);



