<template>
   <div class="container">
      <HeadContent />
      <h2>図書管理システムメニュー</h2>
      <ul>
         <li><button class="btn btn-link">検索</button></li>
         <li><button class="btn btn-link">全図書一覧</button></li>
         <li><button class="btn btn-link">貸出図書一覧</button></li>
         <li><button @click="toAddform()" class="btn btn-link">新規図書登録</button></li>
      </ul>

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

   methods: {
      toAddform() {
         let null_book = {
            name: '',
            
         }
         this.$router.push('/addForm').catch(err => {});
         // 引数 link ← router.jsに登録したnameを代入
      },
   }
}
</script>

<style>
ul {
   list-style: none;
}
</style>