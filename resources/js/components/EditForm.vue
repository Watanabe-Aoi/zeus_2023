<template>
    <table>
        <HeadContent />
        <div>
            <tr>
                <th>図書ID：</th><input type="text" v-model="edited_books.book_id" value="lending_books.author">
            </tr>
            <tr>
                <th>ISBN：</th><input type="text" v-model="edited_books.code" value="lending_books.author">
            </tr>
            <tr>
                <th>タイトル*：</th><input type="text" v-model="edited_books.title" value="lending_books.author">
            </tr>
            <tr>
                <th>著者：</th><input type="text" v-model="edited_books.author" value="lending_books.author">
            </tr>
            <tr>
                <th>訳者：</th><input type="text" v-model="edited_books.translator" value="lending_books.author">
            </tr>
            <tr>
                <th>出版社：</th><input type="text" v-model="edited_books.publisher" value="lending_books.author">
            </tr>
            <tr>
                <th>出版日：</th><input type="text" v-model="edited_books.publicationdate" value="lending_books.author">
            </tr>
            <tr>
                <th>登録者：</th><input type="text" v-model="edited_books.userid" value="lending_books.author">
            </tr>
            <tr>
                <th>登録日：</th><input type="text" v-model="edited_books.datacreateddate" value="lending_books.author">
            </tr>
            <tr>
                <th>状態：</th><input type="text" v-model="edited_books.status" value="lending_books.author">
            </tr>
            <tr>
                <th>キーワード：</th><input type="text" v-model="edited_books.keyword" value="lending_books.author">
            </tr>
            <!-- <td v-if="lending_book.condition = true">保管中</td>
            <td v-else-if="lending_book.condition = false">貸出中</td> -->
            <tr>
                <th>備考：</th><input type="text" v-model="edited_books.memo" value="lending_books.author">
            </tr>
        </div>
        <FootText />
    </table>
</template>

<script>

import FootText from './FootText.vue';
import HeadContent from './HeadContent.vue';
import axios from 'axios';

export default {

    components: {
        HeadContent,
        FootText,
    },
    data() {
        return {
            edited_books: {
                book_id: '',
                code: '',
                title: '',
                author: '',
                translator: '',
                publisher: '',
                publicationdate: '',
                user_id: '',
                datacreateddate: '',
                status: '',
                keyword: '',
                memo: '',
            },
        }
    }
}
</script>
