require('./bootstrap');

import router from "./router";
import VueRouter from "vue-router";
import Toasted from 'vue-toasted';
import store from './store.js';

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(VueRouter).use(Toasted, {
    position: 'bottom-center',
    duration: 2000,
}).use(Vuex);

const app = new Vue({
    el: '#app',
    store,
    router
});
