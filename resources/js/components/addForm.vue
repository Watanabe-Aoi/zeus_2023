<template>
    <table>
        <HeadContent />
        <div>
            <table>
<<<<<<< HEAD
                <tr>
                    <th>新規図書登録</th>
                </tr>
                <tr>
                    <th>ISBN:</th>
                    <td><input type="text"></td>
                    <td>例：ISBN1-2345-6789-X</td>
                </tr>
                <tr>
                    <th>タイトル:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>著者:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>訳者:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>出版社:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>出版日:</th>
                    <td><input type="text"></td>
                    <td>例：2003-04-05</td>
                </tr>
                <tr>
                    <th>キーワード:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>備考:</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>・印の項目は必ず入力してください。</td>
                </tr>
                <tr>
                    <td><button>登録</button></td>
                </tr>
=======
                <tr><th>新規図書登録</th></tr>
                <tr><th>ISBN:</th><td><input type="text" v-model="new_book.code"></td><td>例：ISBN1-2345-6789-X</td></tr>
                <tr><th>タイトル:</th><td><input type="text" v-model="new_book.title"></td></tr>
                <tr><th>著者:</th><td><input type="text" v-model="new_book.author"></td></tr>
                <tr><th>訳者:</th><td><input type="text" v-model="new_book.translater"></td></tr>
                <tr><th>出版社:</th><td><input type="text" v-model="new_book.publisher"></td></tr>
                <tr><th>出版日:</th><td><input type="text" v-model="new_book.publicationdate"></td><td>例：2003-04-05</td></tr>
                <tr><th>キーワード:</th><td><input type="text" v-model="new_book.keyword"></td></tr>
                <tr><th>備考:</th><td><input type="text" v-model="new_book.memo"></td></tr>
                <tr><td>・印の項目は必ず入力してください。</td></tr>
                <td><button @click="addNewBook(new_book)"></button></td>
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
            </table>
            <FootText />
        </div>
    </table>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';

export default {

    components: {
        HeadContent,
        FootText,
        // addForm,
        // ConfirmAddFrom
    
    },
<<<<<<< HEAD

    data() {
        return {
            new_book: {
                isbn: '',
=======
    data(){
        return{
            new_book:{
                code: '',
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
                title: '',
                author: '',
                translater: '',
                publisher: '',
<<<<<<< HEAD
                date: '',
                keyword: '',
                remarks: '',
=======
                publicationdate: '',
                keyword: '',
                memo: '',
                
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
            }

        }

    },
<<<<<<< HEAD
    methods: {
        // insertBooks(){
        //     axios.post('/api/books/insertBooks',this.new_book).then(response =>{
        //         this.books = response.data.books;
        //     });
        // },
=======
    
    methods:{
        addNewBook(book){
            // this.$store.commit('confirmInsertBook', new_book);
            this.$router.push({ name: 'confirmAddForm', params:{book}});
         
        },
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
    }
}
</script>

<<<<<<< HEAD

<<<<<<< HEAD
=======
</script>
>>>>>>> 12337c7ff15e0fbed24effe9ec6cdd61af5a8bcb
=======
</script>

<style>

</style>
>>>>>>> d173521c654288ed42ea38ea7f3ab6dac956f163
