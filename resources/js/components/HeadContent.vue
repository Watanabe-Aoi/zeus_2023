<template>
   <div class="HeadContent">
      <div class="title">
         <span id="title-text">【bCat】図書管理システム</span>
         <span v-if="this.$store.state.logining" class="user">ユーザー:{{ this.$store.state.user_id }}</span>
      </div>
      <div class="menu">
         <button @click="toLink('/')" class="btn btn-link">メニュー</button>
         <span>|</span>
         <button @click="toLink('')" class="btn btn-link">検索</button>
         <span>|</span>
         <button @click="toLink('')" class="btn btn-link">全図書一覧</button>
         <span>|</span>
         <button @click="toLink('')" class="btn btn-link">貸出図書一覧</button>
         <span>|</span>
         <button @click="toLink('')" class="btn btn-link">新規図書登録</button>
         <span>||</span>
         <button @click="loginingChange" class="btn btn-link">{{ login_logout_message }}</button>
      </div>
   </div>
</template>

<script>
export default {
   computed: {
      login_logout_message() {
         return this.$store.state.logining? 'ログアウト' : 'ログイン';
      },
   },

   methods: {
      loginingChange() {
         if(this.$store.state.logining){
            this.$store.commit('logout');
            this.toLink('logouted');
         } else {
            this.toLink('loginpage');
         }
      },

      toLink(link) {
         this.$router.push(link).catch(err => {});
      },
   }
}
</script>

<style>
.title {
   width: 100%;
   background-color: rgb(20, 172, 20);
   color: white;
}

#title-text {
   font-size: larger;
}

.user {
   right: 10px;
   float: right;
}

.menu {
   display: inline-block;
   width: 100%;
   background-color: rgb(196, 195, 195);
   text-align: right;
}
</style>