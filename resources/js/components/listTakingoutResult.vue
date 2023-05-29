<template>
    <div class="container">
        <HeadContent />
        <h1>貸出中図書一覧</h1>
        <div v-for="lending_book in lending_books">
            <lendingList :lending_book="lending_book" :key="lending_book.book_id"/>
            <button class="btn btn-primary" @click="deleteBook(lending_book.book_id)">削除</button>
            <button class="btn btn-primary" @click="returnCheck()">この本を返却する</button>
            <button class="btn btn-primary">編集</button>
        </div>
        <!-- <lendingList :lending_books="this.book_catalog"/> -->
        <FootText />
    </div>
</template>

<script>

// v-for="bookcatalog in bookcatalog" 
import lendingList from './lendingList.vue';
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import axios from 'axios';

export default {
    components: {
        lendingList,
        HeadContent,
        FootText,
    },

    data() {
        return {

            lending_books: [],

        }
    },

    mounted() {
        axios.get('/api/book_catalog').then(response => {
            this.lending_books = response.data.book_catalog;
        })
    },

    methods: {
        returnBook(){

        },

        deleteBook(book_id) {
            // console.log(book_id);
            axios.post('/api/book_catalog',this.book_id).then(response => {
                this.lending_books = response.data.book_catalog;
                console.log(this.lending_books);
            })
        }
    }
}

</script>