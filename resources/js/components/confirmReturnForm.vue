<template>
    <div class="container">
        <HeadContent />
        <h1>この図書の返却手続きをします</h1>
        <div v-for="book in books">
            <lendingList :lending_book="book" />
            <button class="btn btn-primary" @click="returnBook(book.book_id)">返却する</button>
            <router-link to="listTakingoutResult">戻る</router-link>
        </div>
        <FootText />
    </div>
</template>
<script>
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
    props: {
        books:[],
    },
    data() {
        return {
            // lending_books: []

        }
    },
    mounted() {
        // console.log(lending_books);
        // axios.get('/api/book_catalog').then(response => {
        //     this.lending_book = response.data.book_catalog;
        // })
        console.log(this.books);
    },
    methods: {

        returnBook() {
            axios.post('/api/return',{
            column_name: 'book_id',
            book_search: this.book_id
        }).then(response => {
                this.book_catalog = response.data.book_catalog;
            })
        }

    }
}

</script>