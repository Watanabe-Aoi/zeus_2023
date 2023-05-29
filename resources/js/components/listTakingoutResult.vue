<template>
    <div class="container">
    <HeadContent />
    
    <h1>貸出中図書一覧</h1>
    <lendingList :lending_books="lending_books"/>
    <!-- <lendingList :lending_books="this.book_catalog"/> -->
    <table>

        <button class="btn btn-primary" @click="returnCheck()">この本を返却する</button>
        <button class="btn btn-primary">編集</button>
        <button class="btn btn-primary">削除</button>
    </table>
    <FootText />
    </div>
</template>

<script>

// v-for="bookcatalog in bookcatalog" 
import lendingList from './lendingList.vue';
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import axios from 'axios';

export default{
    components: {
        lendingList,
        HeadContent,
        FootText,
    },
    
    data(){
        return {

            lending_books: []

        }
    },

    mounted(){
        axios.get('/api/book_catalog').then(response => {
            this.lending_books = response.data.book_catalog;
            console.log(this.lending_books);
        })
    },
}

</script>