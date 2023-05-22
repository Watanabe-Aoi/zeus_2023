<template>
   <div class="container">
      <table class="table table-stripe">
         <tr>
            <th> 名前 </th>
            <td>{{ item.name }}</td>
         </tr>
         <tr>
            <th> 金額 </th>
            <td>{{ item.price }}</td>
         </tr>
         <tr>
            <th> 在庫 </th>
            <td>{{ item.quantity }}</td>
         </tr>
      </table>
   </div>
</template>


<script>
export default {
   data() {
      return {
         item: {
            name: 'テスト商品',
            price: 100,
            quantity: 23,
         },
      };
   }
};
</script>