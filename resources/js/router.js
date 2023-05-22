import Home from "./components/Home";
import ItemDetail from "./components/ItemDetail";
import Register from "./components/Register";
import VueRouter from "vue-router";

const routes = [
   {
      path: "/",
      component: Home,
      name: "HOME",
   },
   {
      path: "/detail",
      component: ItemDetail,
      name: "detail",
   },
   {
      path: "/register",
      component: Register,
      name: "register",
   },
];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;