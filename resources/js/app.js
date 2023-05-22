require('./bootstrap');

import router from "./router";
import VueRouter from "vue-router";
import Toasted from 'vue-toasted';

import Vue from 'vue';
Vue.use(VueRouter).use(Toasted, {
    position: 'bottom-center',
    duration: 2000,
});

const app = new Vue({
    el: '#app',
    router
});
