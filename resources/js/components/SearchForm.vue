<template>
    <table>

        <HeadContent />
        <div>

            <Tr>
                <th>検索範囲：</th>
                <select v-model="value">
                    <option value="1">図書ID</option>
                    <option value="2">タイトル</option>
                    <option value="3">著者</option>
                    <option value="4">訳者</option>
                    <option value="5">出版社</option>
                    <option value="6">出版日</option>
                    <option value="7">ISBN番号</option>
                    <option value="8">備考</option>
                    <option value="9">キーワード</option>
                </select>
            </Tr>
            <Tr>
                <th>検索語：</th>
                <input type="text" name="serchword">
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