<template>
    <div class="container">
        <HeadContent />
        <table>
            <tr><th>新規図書登録</th></tr>
            <tr><th>ISBN:</th><td><input type="text"></td>例：ISBN1-2345-6789-X</tr>
            <tr><th>タイトル:</th><td><input type="text"></td></tr>
            <tr><th>著者:</th><td><input type="text"></td></tr>
            <tr><th>訳者:</th><td><input type="text"></td></tr>
            <tr><th>出版社:</th><td><input type="text"></td></tr>
            <tr><th>出版日:</th><td><input type="text"></td>例：2003-04-05</tr>
            <tr><th>キーワード:</th><td><input type="text"></td></tr>
            <tr><th>備考:</th><td><input type="text"></td></tr>
            <tr><td>・印の項目は必ず入力してください。</td></tr>
            <tr><td><button >登録</button></td></tr>
        </table>
        <Foottext />
    </div>
</template>

<script>
import Foottext from './FootText.vue';
import HeadContent from './HeadContent.vue';

export default{
    
    components: {
        HeadContent,
        Foottext,
    },

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





        

