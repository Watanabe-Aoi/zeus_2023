import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
const routes = [
   {
      path: "/",
      component: addForm,
      name: "TOP",
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