<template>
   <div class="container">
      <HeadContent />
      <div>
         <h2>ログイン</h2>
         <table>
            <tr>
               <td>ID:</td>
               <td><input type="text" v-model="user_id" class="form-control"></td>
            </tr>
            <tr>
               <td>パスワード:</td>
               <td><input type="text" v-model="password" class="form-control"></td>
            </tr>
            <tr><td><button @click="tryLogin">ログイン</button></td></tr>
         </table>
         <p v-for="error of errorMesses" class="">{{ error }}</p>
      </div>
      <FootText />
   </div>
</template>

<script>
import HeadContent from './HeadContent.vue';
import FootText from './FootText.vue';

import axios from 'axios';
import router from '../router';

export default{
   components: {
      HeadContent,
      FootText,
   },

   data() {
      return {
         user_id: '',
         password: '',
         errorMesses: [],
      };
   },

   methods: {
      tryLogin() {
         axios.post('', {user_id: this.user_id, password: this.password}).then(response => {
            let user_name = response.data.user_name
            this.$store.commit('login', {
               id: this.user_id,
               name: user_name,
            });
            this.$toasted.seccess(user_name + ' としてログインしました。');
            this.$router.push('TOP');
         }).catch(error => {
            this.errorMesses = error.response.data.errors;
            this.$toasted.error('ログインできませんでした。');
         });
      }
   }
};
</script>