<template>
    <div class="container">
        <HeadContent />
        <div>
            <table>
                <tr>
            <th>著者：</th>
            <td>{{ new_book.author }}</td>
        </tr>
        <tr>
            <th>訳者：</th>
            <td>{{ new_book.translator }}</td>
        </tr>
        <tr>
            <th>出版社：</th>
            <td>{{ new_book.publisher }}</td>
        </tr>
        <tr>
            <th>出版日：</th>
            <td>{{ new_book.publication_date }}</td>
        </tr>
        <tr>
            <th>キーワード：</th>
            <td>{{ new_book.keyword }}</td>
        </tr>
        <tr>
            <th>ISBN：</th>
            <td>{{ new_book.code }}</td>
            <td></td>
            <td></td>
            <th>図書ID：</th>
            <td>{{ new_book.book_id }}</td>
        </tr>
        
        <tr>
            <th>登録日：</th>
            <td>{{ new_book.deta_create_date }}</td>
            <td></td>
            <td></td>
            <th>状態：</th>
            <td>{{ new_book.status }}</td>
        </tr>
        <tr>
            <th>備考：</th>
            <td>{{ new_book.memo }}</td>
        </tr>
            </table>
        </div>
        <FootText />
    </div>
</template>

<script>
export default{
    
    props:{
        new_book:[],

    }
}

</script>

<style>

</style>