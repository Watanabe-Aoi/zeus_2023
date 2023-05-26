<template>
   <div class="HeadContent">
      <span class="textLarge">【bCat】図書管理システム</span>
      <span class="user">ユーザー:{{ this.user.name }}</span>
      <table>
         <tr>
            <td><router-link to="/" class="btn btn-link">メニュー</router-link></td>
            <td><router-link to="" class="btn btn-link">検索</router-link></td>
            <td><router-link to="" class="btn btn-link">全図書一覧</router-link></td>
            <td><router-link to="" class="btn btn-link">貸出図書一覧</router-link></td>
            <td><router-link to="" class="btn btn-link">新規図書登録</router-link></td>
            <td><router-link to="" class="btn btn-link">ログイン</router-link></td>
         </tr>
      </table>
   </div>
</template>

<script>
import { RouterLink } from 'vue-router';


export default {
    data() {
        return {
            user: {
                name: "sample",
            },
        };
    },
    components: { RouterLink }
}
</script>

<style>
.Title {
   background-color: rgb(59, 192, 59);
   color: white;
}

.textLarge {
   font-size: large;
}
</style>