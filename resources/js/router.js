import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import SearchForm from './components/SearchForm';

const routes = [
   {
      path: "/",
      component: SearchForm,
      name: "searchForm",
   },
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;