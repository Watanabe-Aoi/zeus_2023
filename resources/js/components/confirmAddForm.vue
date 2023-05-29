
<template>
    <div class="container">
        <HeadContent />
            <table>
                <tr><th>この内容で登録しますか？</th></tr>
                <lendingList :lending_books="lending_books"/>
                <tr><td><button @click="insertBook()">登録</button></td></tr>
                <router-link to="/addForm">修正</router-link>
            </table>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';
import lendingList from './lendingList.vue';
import addForm from './addForm.vue';


export default{
    props:{
        new_book:[],
    },
    
    components: {
        HeadContent,
        FootText,
        lendingList,
    },
    data(){
        return{
            lending_books: 
                {
                    author: '森塚',
                    translator: '',
                    publisher: 'ゼウス',
                    publication_date: '2002-12-04',
                    keyword: 'プログラミング',
                    isbn: 'ISBN123456',
                    book_id: '20230525',
                    register_date: '2023-05-25',
                    condition: '貸出中',
                    remarks: '',
                },
        }
    },

    methods:{
        insertBook(){
            console.log(book);
            this.$router.push({ path: '/addSuccess'});
            // axios.post('/api/books/insertBook',this.new_book).then(response =>{
            //     this.books = response.data.books;
            // });

        },
    }
    
}

</script>





        

