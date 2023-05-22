<template>

   <div class="card">
      <div class="card-header">
         登録ユーザー
      </div>
      <div class="card-body">
         <ol>
            <li class="form-floating mb-3">
               <input type="text" v-model="user.name" class="form-control" id="user-name">
               <label for="user-name">名前</label>
            </li>
            <li class="form-floating mb-3">
               <input type="text" v-model="user.mail" class="form-control" id="user-mail">
               <label for="user-name">メールアドレス</label>
            </li>
         </ol>
         <button class="btn btn-primary" @click="pushButton">登録</button>
      </div>
   </div>

</template>

<script>
export default{
   data() {
      return {
         user: {
            name: '',
            mail: '',
         },
      };
   },

   methods: {
      pushButton() {
         this.$emit('eventToParent', this.user);   // 親にイベントを飛ばす
      },
   },
};
</script>