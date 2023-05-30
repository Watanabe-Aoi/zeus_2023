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
import SearchResult from './components/SearchResult';
import EditForm from './components/EditForm';
import ConfirmTakeoutForm from './components/ConfirmTakeoutForm';
import ConfirmDeleteForm from './components/ConfirmDeleteForm';
import EditSuccess from './components/EditSuccess';
import DeleteSuccess from './components/DeleteSuccess';
import TakeoutSuccess from './components/TakeoutSuccess';
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
   },
   {
      path: "/returnSuccess",
      component: returnSuccess,
      name: "returnSuccess",
   },
   {
      path: "/searchResult",
      component: SearchResult,
      name: "searchResult",
   },
   {
      path: "/editForm",
      component: EditForm,
      name: "editForm",
   },
   {
      path: "/confirmTakeoutForm",
      component: ConfirmTakeoutForm,
      name: "confirmTakeoutForm",
   },
   {
      path: "/confirmDeleteForm",
      component: ConfirmDeleteForm,
      name: "confirmDeleteForm",
   },
   {
      path: "/editSuccess",
      component: EditSuccess,
      name: "editSuccess",
   },
   {
      path: "/deleteSuccess",
      component: DeleteSuccess,
      name: "deleteSuccess",
   },
   {
      path: "/takeoutSuccess",
      component: TakeoutSuccess,
      name: "takeoutSuccess",
   },

];

const router = new VueRouter({
   mode: 'history',
   routes,
});

export default router;