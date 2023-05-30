<template>
    <div class="container">
        <HeadContent />
        <h1>貸出中図書一覧</h1>
        <div v-for="lending_book in lending_books">
            <lendingList :lending_book="lending_book" :key="lending_book.book_id"/>
            <button class="btn btn-primary" @click="deleteBook(lending_book)">削除</button>
            <button class="btn btn-primary" @click="returnCheck(lending_book)">この本を返却する</button>
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

        deleteBook(lending_book) {
            // console.log(book_id);
            // console.log(this.book_id);
            axios.post('/api/book_catalog',lending_book).then(response => {
                // console.log(response.data.book_catalog);
                this.lending_books = response.data.book_catalog;
                // console.log(this.lending_books);
            })
        }
    }
}

</script>