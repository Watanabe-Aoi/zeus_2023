<!-- HTMLとして読み込まれるエリア -->
<template>
   <div class="container">
      <ItemList :items="items"/>
      <ItemList :items="fruits"/>
      <h3>合計金額: {{ buy_total }}</h3>
      <h3>残高: {{ wallet }}円</h3>
      <button @click="buy" v-if="buy_total < this.wallet">購入する</button>

      <router-link to="register">ユーザー登録画面</router-link>
      <div>
         <h2>買ったもの</h2>
         <table>
            <thead>
               <tr>
                  <th>名前</th>
                  <th>価格</th>
                  <th>個数</th>
               </tr>
            </thead>
            <tbody>
               <tr v-for="item of this.myStorage">
                  <td>{{ item.name }}</td>
                  <td>{{ item.price }}</td>
                  <td>{{ item.buyQuant }}</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</template>


<!------ JavaScript ------>
<script>
import ItemList from './ItemList.vue';

export default {
   components: {
      ItemList,
   },

   data() {
      return {    // 連想配列
         items: [
            {
               id: 1,
               name: '鉛筆',
               price: 100,
               quantity: 10,  // 数量
               buyQuant: 0,
            },
            {
               id: 2,
               name: '消しゴム',
               price: 200,
               quantity: 8,  // 数量
               buyQuant: 0,
            },
            {
               id: 3,
               name: '定規',
               price: 500,
               quantity: 3,  // 数量
               buyQuant: 0,
            },
            {
               id: 4,
               name: 'コンパス',
               price: 600,
               quantity: 1,  // 数量
               buyQuant: 0,
            },
         ],

         fruits: [
            {
               id: 1,
               name: 'りんご',
               price: 50,
               quantity: 10,  // 数量
               buyQuant: 0,
            },
            {
               id: 2,
               name: 'バナナ',
               price: 30,
               quantity: 8,  // 数量
               buyQuant: 0,
            },
            {
               id: 3,
               name: 'スイカ',
               price: 700,
               quantity: 3,  // 数量
               buyQuant: 0,
            },
            {
               id: 4,
               name: 'メロン',
               price: 1000,
               quantity: 1,  // 数量
               buyQuant: 0,
            },
         ],

         wallet: 500,   // 財布残高

         cart: [],

         myStorage: []
      };
   },

   mounted(){  // ライフサイクルフック
      this.$toasted.success('ようこそ');
   },

   computed: {
      buy_total() {
         let sum = 0;
         let allItems = this.items.concat(this.fruits);
         for(let buyItem of allItems){
            let buyPrice = buyItem['price'] * buyItem['buyQuant'];
            sum += buyPrice;
         }
         return sum;
      }
   },

   methods: {
      // myStorageへ
      buy() {
         this.wallet -= this.buy_total();
         let allItems = this.items.concat(this.fruits);
         for(let item of allItems){    // すべてのアイテムを見る
            if(item.buyQuant > 0){     // 購入数が０でないか
               if(this.myStorage.length > 0){   // 所持数が０でないか
                  for(let myItem of this.myStorage){     // 全ての所持アイテムを見る
                     if(item.name == myItem['name']){    // 商品名が一致するか
                        console.log(myItem['quantity']);
                        myItem.quant = Number(myItem.quant) + Number(item.buyQuant);
                     } else {
                        this.myStorage.push({
                           name: item.name,
                           price: Number(item.price),
                           quantity: Number(item.buyQuant),
                        });
                     }
                  }
               } else {
                  this.myStorage.push({
                     name: item.name,
                     price: item.price,
                     quantity: item.quantity,
                  });
               }
               this.$toasted.success('購入しました。');
            }
            item.buyQuant = 0;
         }
      }
   },
};

</script>



<!------ CSS ------>
<style>
.container {
   margin: auto;
   width: 60%;
   padding: auto;
}

.tableF {
   width: 100%;
   border-spacing: 0;
   /* border: none; */
}

.title-row {
   text-align: left;
   font-weight: bolder;
   background-color: rgb(193, 193, 193);
}

.contents-row {
   padding: 5px;
}

.total-row {
   background-color: rgb(223, 223, 223);
}

input[type="text"], input[type="number"]{
   border: 1px solid black;
   border-radius: 2px;
   padding: 5px;
}

.text-red{
   color: red;
}

.cannotPush{
   color: gray;
   background-color: rgb(215, 215, 215);
   border: gray 1px solid;
   border-radius: 3px;
}
</style>