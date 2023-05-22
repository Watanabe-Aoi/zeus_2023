<template>
   <div class="container">
      <UserProfile @eventToParent="registerUser" />
      <UserProfile @eventToParent="registerUser" />

      <table class="table table-striped">
         <thead>
            <tr>
               <th> 名前 </th>
               <th> メールアドレス </th>
            </tr>
         </thead>
         <tbody>
            <tr v-for="user in users">
               <td>{{ user.name }}</td>
               <td>{{ user.mail }}</td>
            </tr>
         </tbody>
      </table>
   </div>
</template>

<script>
import UserProfile from './UserProfile.vue';

export default{
   components: {
      UserProfile,
   },

   data() {
      return {
         users: [],
      };
   },

   methods: {
      registerUser(user) {
         this.users.push(user);
         this.$toasted.success('ユーザーを登録しました。');  // 子componentから促されて動く
      },
   }
};
</script>