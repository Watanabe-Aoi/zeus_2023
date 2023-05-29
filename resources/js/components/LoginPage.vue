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
         <p v-for="error of errorMesses" class="alert alert-danger">{{ error }}</p>
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
         axios.post('/api/tryLogin', {user_id: this.user_id, password: this.password}).then(response => {
            console.log(response);
            if(response.data.user !== null) {
               let userId = response.data.user.user_id;
               this.$toasted.success(userId + ' としてログインしました。');
               this.$router.push({ name:'TOP' });
               this.$store.commit('login', {
                  id: userId,
               });
            } else {
               this.errorMesses = ['ユーザーが見つからないか、パスワードが違います。'];
            }
         }).catch(error => {
            this.errorMesses = error;
            this.$toasted.error('ログインできませんでした。');
         });
      }
   }
};
</script>