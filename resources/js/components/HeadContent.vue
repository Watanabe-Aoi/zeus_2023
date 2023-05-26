<template>
   <div class="container">
      <span class="textLarge">【bCat】図書管理システム</span>
      <span class="user">ユーザー:{{ this.user.name }}</span> 
      <table>
         <tr>
            <td><button>メニュー</button></td>
            <td><button>検索</button></td>
            <td><button>全図書一覧</button></td>
            <td><button>貸出図書一覧</button></td>
            <td><button>新規図書登録</button></td>
            <td><button>ログイン</button></td>
         </tr>
      </table>
   </div>
   
</template>

<script>

export default{
   data() {
      return {
         user: {
            name: 'sample',
         },
      };
   },
}
</script>

<style>
.Title {
   background-color: rgb(59, 192, 59);
   color: white;
}
.textLarge {
   font-size:large;
}
</style>