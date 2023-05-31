
<template>
    <div class="container">
        <HeadContent />
            <table>
            <tr><th>登録しました！</th></tr>
            <AddBook :new_book="new_book"/>
            <!-- <tr>
                <td><button @click="借りる画面へ">この本を借りる</button></td>
                <td><button @click="編集画面へ">編集</button></td>
                <td><button @click="削除画面へ">削除</button></td>
                </tr> -->
                <router-link to="/">戻る</router-link>
            </table>
        <FootText />
    </div>
</template>

<script>

import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import AddBook from './AddBook.vue';

export default{
    
    components: {
        HeadContent,
        FootText,
        AddBook,
    },

    data(){
        return{
            new_book: 
                {
                    
                  
                    title: this.$route.params.book.title,
                    author: this.$route.params.book.author,
                    translator: this.$route.params.book.translater,
                    publisher: this.$route.params.book.publisher,
                    publication_date: this.$route.params.book.publicationdate,
                    code: this.$route.params.book.code,
                    status: '〇保管中',
                    keyword: this.$route.params.book.keyword,
                    memo: this.$route.params.book.memo,
                    data_creator: this.$route.params.book.data_creator,
                    deta_create_date: this.$route.params.book.deta_create_date,
                },
        }
    },
}
</script>

<style>

</style>




        

