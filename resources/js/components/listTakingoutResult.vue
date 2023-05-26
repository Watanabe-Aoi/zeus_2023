<template>
    <div class="container">
    <HeadContent />
    
    <h1>貸出中図書一覧</h1>
    <lendingList :bookcatalog="bookcatalog"/>
    <table>

        <button class="btn btn-primary" @click="returnCheck()">この本を返却する</button>
        <button class="btn btn-primary">編集</button>
        <button class="btn btn-primary">削除</button>
    </table>
    <FootText />
    </div>
</template>

<script>
// v-for="bookcatalog in bookcatalog" 
import lendingList from './lendingList.vue';
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';

export default{
    components: {
        lendingList,
        HeadContent,
        FootText,
    },
    
    data(){
        return {
            bookcatalog: {
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
            }

        }
    },

    mounted(){
        axios.get('/api/bookcatalog').then(response => {
            this.bookcatalog = response.data.bookcatalog;
        })
    },
}

</script>