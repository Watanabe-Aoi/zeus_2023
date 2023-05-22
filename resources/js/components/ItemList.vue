<template>

   <table class="tableF">
      <thead class="title-row">
         <tr>
            <th>名前</th>
            <th>金額</th>
            <th>在庫</th>
            <th>購入数</th>
            <th>小計</th>
         </tr>
      </thead>
      
      <tbody class="contents-row">
         <tr v-for="item in items">
            <td>{{ item.name }}</td>
            <td>{{ item.price }}円</td>
            <td>{{ item.quantity }}個</td>
            <td><input type="number" min="0" max=10 v-model="item.buyQuant"></td>
            <td>
               <router-link to="/detail">詳細</router-link>
            </td>
            <td>{{ buy_price(item) }}円</td>
         </tr>
      </tbody>
   </table>

</template>

<script>
export default{
   props: {
      items: [],
      cart: [],
   },

   computed: {
      buy_price() {
         return (item) => {
            return item['price'] * item['buyQuant']
         }
      },
   },
};

</script>