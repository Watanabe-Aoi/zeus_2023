<template>
    <h1>貸出中図書一覧</h1>


    <table v-for="lending_book in lending_books" >
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
            <td>{{ lending_book.isbn }}</td>
            <td></td>
            <td></td>
            <td>図書ID：</td>
            <td>{{ lending_book.book_id }}</td>
        </tr>
        <tr>
            <th>登録日：</th>
            <td>{{ lending_book.register_date }}</td>
            <td></td>
            <td></td>
            <td>状態：</td>
            <td>{{ lending_book.condition }}</td>
        </tr>
        <tr>
            <th>備考：</th>
            <td>{{ lending_book.remarks }}</td>
        </tr>
    </table>

    <button class="btn btn-primary">この本を返却する</button>
    <button class="btn btn-primary">編集</button>
    <button class="btn btn-primary">削除</button>


</template>

<script>

export default{
    data(){
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
    }
}

</script>