import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';
import SearchForm from './components/SearchForm';
<<<<<<< HEAD
import confirmAddForm from './components/confirmAddForm';
=======
import TopMenu from './components/TopMenu';
import listTakingoutResult from './components/listTakingoutResult';
import confirmReturnForm from './components/confirmReturnForm';
import returnSuccess from './components/returnSuccess';

>>>>>>> 34e506f1850c7e162e177895d8580ee379a9a0b6
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
<<<<<<< HEAD
      path: '/confirmAddForm/:new_book',
      component: confirmAddForm,
      name: 'confirmAddForm',
      
    }
=======
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
>>>>>>> 34e506f1850c7e162e177895d8580ee379a9a0b6
   
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;