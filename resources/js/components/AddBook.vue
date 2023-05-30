<template>
    <div class="container">
        <HeadContent />
        <div>
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
            </table>
        </div>
        <FootText />
    </div>
</template>

<script>
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';

export default{
    
    props:{
        new_book:[],

    },
    
    methods:{
        addNewBook(book){
            // this.$store.commit('confirmInsertBook', new_book);
            this.$router.push({ name: 'confirmAddForm', params:{book}});
         
        },
    }
}

</script>

<style>

</style>