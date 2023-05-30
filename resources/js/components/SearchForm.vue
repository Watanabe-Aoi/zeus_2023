<template>
    <table>

        <HeadContent />
        <div>

            <Tr>
                <th>検索範囲：</th>
                <select v-model="value">
                    <option value="book_id">図書ID</option>
                    <option value="title">タイトル</option>
                    <option value="author">著者</option>
                    <option value="translator">訳者</option>
                    <option value="publisher">出版社</option>
                    <option value="publication_date">出版日</option>
                    <option value="code">ISBN番号</option>
                    <option value="memo">備考</option>
                    <option value="keyword">キーワード</option>
                </select>
            </Tr>
            <Tr>
                <th>検索語：</th>
                <input type="text" name="serchword" v-model="search_word">
            </Tr>
            <tr>
                <p>{{ value }}</p>
            </tr>
            <tr>
                aqaq{{ this.book_catalogs }}
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
            value: '',
            search_word: '',
            book_catalogs: [],
        }

    },

    //テスト組んでるだけです
    mounted() {
        axios.get('/api/search').then(response => {
            this.book_catalogs = response.data.book_catalogs;
        }).catch(function (error) {
            console.log('error');
        })
        this.$toasted.success('うごきました');
    }
}

</script>