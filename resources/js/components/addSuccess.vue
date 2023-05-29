
<template>
    <div class="container">
        <HeadContent />
            <table>
            <tr><th>登録しました！</th></tr>
                <tr><th>タイトル:</th><td>{{ $route.params.new_book.title }}</td></tr>
                <tr><th>著者:</th><td>{{ $route.params.new_book.author }}</td></tr>
                <tr><th>訳者:</th><td>{{  }}</td></tr>
                <tr><th>出版社:</th><td>{{  }}</td></tr>
                <tr><th>出版日:</th><td>{{  }}</td></tr>
                <tr><th>キーワード:</th><td>{{  }}</td></tr>
                <tr><th>備考:</th><td>{{  }}</td></tr>
                <tr><td><button @click="insertBook()">登録</button></td></tr>
            </table>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';

export default{
    
    components: {
        HeadContent,
        FootText,
    },

    // data(){
    //     return{
    //         new_book:{
    //             isbn:'',
    //             title:'',
    //             author:'',
    //             translater:'',
    //             publisher:'',
    //             date:'',
    //             keyword:'',
    //             remarks:'',
    //         }
    //     }
    // },
    methods:{
        insertBook(){
            axios.post('/api/books/insertBook',this.new_book).then(response =>{
                this.books = response.data.books;
            });
        },
    }
    
}

</script>





        

