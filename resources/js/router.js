import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
import TopMenu from './components/TopMenu';
import listTakingoutResult from './components/listTakingoutResult';
import confirmReturnForm from './components/confirmReturnForm';
import returnSuccess from './components/returnSuccess';
import confirmAddForm from './components/confirmAddForm';
import addSuccess from './components/addSuccess';
import LoginPage from './components/LoginPage';
import Logouted from './components/Logouted';

const routes = [
   
   {
      path: "/addForm",
      component: addForm,
      name: "addForm",
      props: true,
   },
   {
      path: "/confirmAddForm",
      component: confirmAddForm,
      name: "confirmAddForm",
      props: true
   },
   {
      path: "/addSuccess",
      component: addSuccess,
      name: "addSuccess",
      props: true
   },
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
   {
      path: "/listTakingoutResult",
      component: listTakingoutResult,
      name: "listTakingoutResult",
   },
   {
      path: "/confirmReturnForm",
      component: confirmReturnForm,
      name: "confirmReturnForm",
      props: true,
   },
   {
      path: "/returnSuccess",
      component: returnSuccess,
      name: "returnSuccess",
   },
   
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;