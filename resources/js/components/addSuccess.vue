
<template>
    <div class="container">
        <HeadContent />
            <table>
            <tr><th>登録しました！</th></tr>
            <lendingList :lending_books="lending_books"/>
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
import lendingList from './lendingList.vue';

export default{
    
    components: {
        HeadContent,
        FootText,
        lendingList,
    },

    data(){
        return{
            lending_books: 
                {
                    author: '森塚',
                    translator: '',
                    publisher: 'ゼウス',
                    publication_date: '2002-12-04',
                    keyword: 'プログラミング',
                    isbn: 'ISBN123456',
                    book_id: '20230525',
                    register_date: '2023-05-25',
                    condition: '貸出中',
                    remarks: '',
                },
                
        }
    },
    
}
</script>

<style>

</style>




        

