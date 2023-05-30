<template>
   <div class="container">
      <HeadContent />
      <h2>図書管理システムメニュー</h2>
      <ul>
         <li><button class="btn btn-link">検索</button></li>
         <li><button class="btn btn-link">全図書一覧</button></li>
         <li><button class="btn btn-link">貸出図書一覧</button></li>
         <li><button class="btn btn-link">新規図書登録</button></li>
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
   }
}
</script>

<style>
ul {
   list-style: none;
}
</style>