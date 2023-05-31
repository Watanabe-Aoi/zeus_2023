<template>
    <div class="container">
<<<<<<< HEAD
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
=======

        <h1>貸出中図書一覧</h1>

        <table>
            <tr>
                <th>著者：</th>
                <td>{{ lending_books.author }}</td>
            </tr>
            <tr>
                <th>訳者：</th>
                <td>{{ lending_books.translator }}</td>
            </tr>
            <tr>
                <th>出版社：</th>
                <td>{{ lending_books.publisher }}</td>
            </tr>
            <tr>
                <th>出版日：</th>
                <td>{{ lending_books.publication_date }}</td>
            </tr>
            <tr>
                <th>キーワード：</th>
                <td>{{ lending_books.keyword }}</td>
            </tr>
            <tr>
                <th>ISBN：</th>
                <td>{{ lending_books.isbn }}</td>
                <td></td>
                <td></td>
                <th>図書ID：</th>
                <td>{{ lending_books.book_id }}</td>
            </tr>
            <tr>
                <th>登録日：</th>
                <td>{{ lending_books.register_date }}</td>
                <td></td>
                <td></td>
                <th>状態：</th>
                <td>{{ lending_books.condition }}</td>
            </tr>
            <tr>
                <th>備考：</th>
                <td>{{ lending_books.remarks }}</td>
            </tr>
            <button class="btn btn-primary">この本を返却する</button>
            <button class="btn btn-primary">編集</button>
            <button class="btn btn-primary">削除</button>
        </table>

>>>>>>> search_branch
    </div>
</template>

<script>

<<<<<<< HEAD
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

=======
export default {
>>>>>>> search_branch
    data() {
        return {

            lending_books: [],
            
            // statusId:[
            //         {
            //             id: 1,
            //             text: '保管中',
            //         },
            //         {
            //             id: 2,
            //             text: '貸出中',
            //         },
            //         {
            //             id: 3,
            //             text: '紛失',
            //         },
            //     ],

            // statusId: this.$store.state.statusId,

        }
    },
<<<<<<< HEAD

    mounted() {
        axios.get('/api/book_catalog', {
            params: {
                book_search: '貸出中' 
            }
        }).then(response => {
            console.log(response.data.book_catalog);
            this.lending_books = response.data.book_catalog;
        })
    },

    methods: {
        returnBook(lending_book) {
            axios.post('/api/return', lending_book).then(response => {
                this.lending_book = response.data.book_catalog;
            })
        },
        deleteBook(lending_book) {
            axios.post('/api/book_catalog', lending_book).then(response => {
                this.lending_books = response.data.book_catalog;
            })
        },
    },


=======
>>>>>>> search_branch
}


</script>