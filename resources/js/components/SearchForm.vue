<template>
    <table>

        <HeadContent />
        <div>

            <Tr>
                <th>検索範囲：</th>
                <select v-model="value">
                    <option value="book_id">図書ID</option>
                    <option value="title">タイトル</option>
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
                <input type="text" name="serchvv">
            </Tr>
            <tr>
                <p>{{ value }}</p>
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
            bookcalogs: {},
        }

    },

    //テスト組んでるだけです
    mounted() {
        axios.get('/api/search').then(response => {
            this.value = response.data.bookcalogs;
        })
    }
}

</script>