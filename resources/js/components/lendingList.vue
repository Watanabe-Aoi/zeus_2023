<template>
    <div class="content">
<<<<<<< HEAD
        <!-- <table> -->
        <table>
            <tr>
                <th>著者：</th>
                <td>{{ lending_book.author }}</td>
            </tr>
            <tr>
                <th>訳者：</th>
                <td>{{ lending_book.translator }}</td>
            </tr>
            <tr>
                <th>出版社：</th>
                <td>{{ lending_book.publisher }}</td>
            </tr>
            <tr>
                <th>出版日：</th>
                <td>{{ lending_book.publication_date }}</td>
            </tr>
            <tr>
                <th>キーワード：</th>
                <td>{{ lending_book.keyword }}</td>
            </tr>
            <tr>
                <th>ISBN：</th>
                <td>{{ lending_book.code }}</td>
                <td></td>
                <td></td>
                <th>図書ID：</th>
                <td>{{ lending_book.book_id }}</td>
=======
        <table>
            <!-- <table v-for="lending_book in lending_books"> -->
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
>>>>>>> search_branch
            </tr>

            <tr>
                <th>登録日：</th>
<<<<<<< HEAD
                <td>{{ lending_book.deta_create_date }}</td>
                <td></td>
                <td></td>
                <th>状態：</th>
                <td>{{ lending_book.status }}</td>
=======
                <td>{{ lending_books.register_date }}</td>
                <td></td>
                <td></td>
                <th>状態：</th>
                <td>{{ lending_books.condition }}</td>
>>>>>>> search_branch
                <!-- <td v-if="lending_book.condition = true">保管中</td>
            <td v-else-if="lending_book.condition = false">貸出中</td> -->
            </tr>
            <tr>
                <th>備考：</th>
<<<<<<< HEAD
                <td>{{ lending_book.memo }}</td>
            </tr>
            
=======
                <td>{{ lending_books.remarks }}</td>
            </tr>
>>>>>>> search_branch
        </table>
    </div>
</template>

<script>

export default {
    props: {
        lending_book: [],
    },
    
}

</script>