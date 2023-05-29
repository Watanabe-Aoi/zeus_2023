<template>
   <div class="HeadContent">
      <div class="title">
         <span>【bCat】図書管理システム</span>
         <span class="user">ユーザー:{{ this.user.name }}</span>
      </div>
      <div class="menu">
         <router-link to="/" class="btn btn-link">メニュー</router-link>
         <span>|</span>
         <router-link to="" class="btn btn-link">検索</router-link>
         <span>|</span>
         <router-link to="" class="btn btn-link">全図書一覧</router-link>
         <span>|</span>
         <router-link to="" class="btn btn-link">貸出図書一覧</router-link>
         <span>|</span>
         <router-link to="" class="btn btn-link">新規図書登録</router-link>
         <span>||</span>
         <button class="btn btn-link" @click="loginingChange">{{ login_logout_message }}</button>
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
   
   data() {
        return {
            user: {
               name: '',
            },
        };
    },

    methods: {
      loginingChange() {
         if(this.$store.state.logining){
            this.$store.commit('logout');
         } else {
            this.$router.push('loginpage');
         }
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