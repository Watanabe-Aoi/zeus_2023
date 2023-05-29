<template>
    <div class="content">
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
        </tr>
        <tr>
            <th>登録日：</th>
            <td>{{ lending_books.register_date }}</td>
            <td></td>
            <td></td>
            <th>状態：</th>
            <td>{{ lending_books.condition }}</td>
            <!-- <td v-if="lending_book.condition = true">保管中</td>
            <td v-else-if="lending_book.condition = false">貸出中</td> -->
        </tr>
        <tr>
            <th>備考：</th>
            <td>{{ lending_books.remarks }}</td>
        </tr>
    </table>
</div>
</template>

<script>

export default {
    props: {
        lending_books: [],
    },
}

</script>