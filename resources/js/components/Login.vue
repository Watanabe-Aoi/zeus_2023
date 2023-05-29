<template>
   <div class="container">
      <HeadContent />
      <div>
         <h2>ログイン</h2>
         <table>
            <tr>
               <td>ID:</td>
               <td><input type="text" v-model="this.id" class="form-control"></td>
            </tr>
            <tr>
               <td>パスワード:</td>
               <td><input type="text" v-model="this.password" class="form-control"></td>
            </tr>
         </table>
      </div>
      <FootText />
   </div>
</template>

<script>
import HeadContent from './HeadContent.vue';
import FootText from './FootText.vue';

export default{
   components: {
      HeadContent,
      FootText,
   },

   data() {
      return {
         user_id: '',
         password: '',
      };
   },
};
</script>