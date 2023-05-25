import VueRouter from 'vue-router';

import ExampleComponent from './components/ExampleComponent';

const routes = [
   {
      path: "/",
      component: ExampleComponent,
      name: "top",
   },
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;