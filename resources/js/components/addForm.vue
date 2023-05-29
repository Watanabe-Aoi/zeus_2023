<template>
    <div class="container">
        <HeadContent />
        <div>
            <table>
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

                <td><router-link to="/confirmAddForm/:new_book">登録</router-link></td>


            </table>
        </div>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import confirmAddForm from './confirmAddForm.vue';

export default{
    
    components: {
        HeadContent,
        FootText,
    },

    data(){
        return{
            new_book:{
                code:'',
                title:'',
                author:'',
                translater:'',
                publisher:'',
                publicationdate:'',
                keyword:'',
                memo:'',
                datacreator:'',
            }
        }
    },
    // methods:{
    //     confirmInsertBook(new_book){
    //         this.$store.commit('confirmInsertBook', new_book);
    //         this.$router.push({ path: '/confirmAddForm/${new_book}'});
    //     },
    // }
    
}

</script>