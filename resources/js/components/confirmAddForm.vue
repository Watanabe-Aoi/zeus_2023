
<template>
    <div class="container">
        <HeadContent />
            <table>
                <tr><th>この内容で登録しますか？</th></tr>
                <AddBook :new_book="new_book"/>
                <tr><td><button @click="insertBook()">登録</button></td></tr>
                <router-link to="/addForm">修正</router-link>
            </table>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import AddBook from './AddBook.vue';
import axios from 'axios';
var now = new Date();
var y = now.getFullYear();
var m = now.getMonth()+1;
var d = now.getDate();


export default{
    props:['book'],
    
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
                    data_creator: 'あ',
                    deta_create_date: y+"-"+m+"-"+d,
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





        

