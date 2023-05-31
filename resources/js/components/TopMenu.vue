<template>
   <div class="container">
      <HeadContent />
      <h2>図書管理システムメニュー</h2>
      <ul>
         <li><button @click="tolink('searchForm')" class="btn btn-link">検索</button></li>
         <li><button @click="tolink('searchResult')" class="btn btn-link">全図書一覧</button></li>
         <li><button @click="tolink('searchResult')" class="btn btn-link">貸出図書一覧</button></li>
         <li><button @click="toAddform()" class="btn btn-link">新規図書登録</button></li>
      </ul>

      <FootText />
   </div>
</template>

<script>
import HeadContent from './HeadContent.vue';
import FootText from './FootText.vue';
import router from '../router';

export default{
   components: {
      HeadContent,
      FootText,
   },

   methods: {
      toAddform() {
         let null_book = {
            name: '',
            
         }
         this.$router.push('/addForm').catch(err => {});
         // 引数 link ← router.jsに登録したnameを代入
      },

      tolink(link){
         this.$router.push(link);
      },

      tolinkWithArgs(link, args) {
         this.$router.push({name: link, params: args});
      }
   }
}
</script>

<style>
ul {
   list-style: none;
}
</style>