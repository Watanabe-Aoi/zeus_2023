import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
import confirmAddForm from './components/confirmAddForm';
const routes = [
   {
      path: "/",
      component: addForm,
      name: "addForm",
   },
   {
      path: "/searchForm",
      component: SearchForm,
      name: "searchForm",
   },
   {
      path: '/confirmAddForm/:new_book',
      component: confirmAddForm,
      name: 'confirmAddForm',
      
    }
   
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;