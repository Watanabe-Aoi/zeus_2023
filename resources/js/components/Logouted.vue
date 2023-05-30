<template>
   <div class="container">
      <HeadContent />
      
      <h1>ログアウトしました。</h1>
      <router-link to="/loginpage" class="btn btn-link">ログイン</router-link>

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
   }
};
</script>