import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
import TopMenu from './components/TopMenu';
import Login from './components/Login';
import Logouted from './components/Logouted';

const routes = [
   {
      path: "/",
      component: TopMenu,
      name: "TOP",
   },
   {
      path: "/login",
      component: Login,
      name: "login",
   },
   {
      path: "/logouted",
      component: Logouted,
      name: "logouted",
   },
   {
      path: "/searchForm",
      component: SearchForm,
      name: "searchForm",
   },
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;