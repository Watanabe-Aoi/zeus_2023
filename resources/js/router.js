import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
import TopMenu from './components/TopMenu';
import LoginPage from './components/LoginPage';
import Logouted from './components/Logouted';

const routes = [
   {
      path: "/",
      component: TopMenu,
      name: "TOP",
   },
   {
      path: "/loginpage",
      component: LoginPage,
      name: "loginpage",
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