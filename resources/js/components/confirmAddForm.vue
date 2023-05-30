
<template>
    <div class="container">
        <HeadContent />
            <table>
                <tr><th>この内容で登録しますか？</th></tr>
                <lendingList :lending_books="new_book"/>
                <tr><td><button @click="insertBook()">登録</button></td></tr>
                <router-link to="/addForm">修正</router-link>
            </table>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import lendingList from './lendingList.vue';
import axios from 'axios';


export default{
    props:['book'],
    
    components: {
        HeadContent,
        FootText,
        lendingList,
    },
    data(){
        return{
            new_book: 
                {
                    author: this.$route.params.book.author,
                    translator: this.$route.params.book.translater,
                    publisher: this.$route.params.book.publisher,
                    publication_date: this.$route.params.book.publicationdate,
                    keyword: this.$route.params.book.keyword,
                    isbn: this.$route.params.book.code,
                    book_id:'',
                    condition: '〇保管中',
                    remarks: this.$route.params.book.memo,
                },
        }
    },


    methods:{
        insertBook(){
            axios.post('/api/book_catalog/insertBook',this.new_book).then(response =>{
                this.new_book = response.data.new_book; 
                this.$router.push({ path: '/addSuccess'}
                );
            }).catch();
        },
    }
    
}

</script>

<style>

</style>





        

