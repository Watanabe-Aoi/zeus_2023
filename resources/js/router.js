import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
import TopMenu from './components/TopMenu';
import listTakingoutResult from './components/listTakingoutResult';
import confirmReturnForm from './components/confirmReturnForm';
import returnSuccess from './components/returnSuccess';

const routes = [
   {
      path: "/",
      component: TopMenu,
      name: "TOP",
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