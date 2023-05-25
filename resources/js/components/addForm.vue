<template>
    <header class="Header"></header>
    <div class="container">
        <th>新規図書登録</th>
            <tr><th>ISBN:</th><td><input type="text" v-model="isbn"></td>例：ISBN1-2345-6789-X</tr>
            <tr><th>タイトル:</th><td><input type="text" v-model="title"></td></tr>
            <tr><th>著者:</th><td><input type="text" v-model="author"></td></tr>
            <tr><th>訳者:</th><td><input type="text" v-model="translater"></td></tr>
            <tr><th>出版社:</th><td><input type="text" v-model="publisher"></td></tr>
            <tr><th>出版日:</th><td><input type="text" v-model="date"></td>例：2003-04-05</tr>
            <tr><th>キーワード:</th><td><input type="text" v-model="keyword"></td></tr>
            <tr><th>備考:</th><td><input type="text" v-model="remarks"></td></tr>
            ・印の項目は必ず入力してください。
            <button >登録</button>
    </div>
    <footer class="Footer"></footer>
</template>

<script>
import Header from './Header.vue';
import Footer from './Footer.vue';

export default{
    data(){
        return{
            new_book:{
                isbn:'',
                title:'',
                author:'',
                translater:'',
                publisher:'',
                date:'',
                keyword:'',
                remarks:'',
            }
        }
    },
    methods:{
        // insertBooks(){
        //     axios.post('/api/books/insertBooks',this.new_book).then(response =>{
        //         this.books = response.data.books;
        //     });
        // },
    }
    
}





        

