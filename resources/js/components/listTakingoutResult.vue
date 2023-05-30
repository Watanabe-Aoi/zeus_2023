<template>
    <div class="container">

        <h1>貸出中図書一覧</h1>

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
            <button class="btn btn-primary">この本を返却する</button>
            <button class="btn btn-primary">編集</button>
            <button class="btn btn-primary">削除</button>
        </table>

    </div>
</template>

<script>
// v-for="lending_books in lending_books" 

export default {
    data() {
        return {
            lending_books: {
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
}

</script>