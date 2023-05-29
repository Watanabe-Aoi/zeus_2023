<template>
    <div class="container">
        <HeadContent />
        <h1>この図書の返却手続きをします</h1>
        <lendingList :lending_books="bookcatalog" />
        <table>
            <button class="btn btn-primary">返却する</button>
            <router-link to="listTakingoutResult">戻る</router-link>
        </table>
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
    data() {
        return {
            bookcatalog: []




        }
    },
    mounted(){
        axios.get('/api/book_catalog').then(response => {
            this.bookcatalog = response.data.book_catalog;
        })
    },
    methods: {

        returnBook() {
            axios.post('/api/bookcatalog', this.bookcatalog).then(response => {
                this.bookcatalog = response.data.bookcatalog;
            })
        }

    }
}

</script>