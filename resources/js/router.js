import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';
import addForm from './components/addForm';

const routes = [
   {
      path: "/",
      component: addForm,
      name: "TOP",
   },
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;