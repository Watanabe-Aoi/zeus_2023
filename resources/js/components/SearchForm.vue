<template>
    <table>

        <HeadContent />
        <div>

            <Tr>
                <th>検索範囲：</th>
                <select v-model="bookcatalogs">
                    <option bookcatalogs="book_id">図書ID</option>
                    <option bookcatalogs="title">タイトル</option>
                    <option bookcatalogs="3">著者</option>
                    <option bookcatalogs="4">訳者</option>
                    <option bookcatalogs="5">出版社</option>
                    <option bookcatalogs="6">出版日</option>
                    <option bookcatalogs="7">ISBN番号</option>
                    <option bookcatalogs="8">備考</option>
                    <option bookcatalogs="9">キーワード</option>
                </select>
            </Tr>
            <Tr>
                <th>検索語：</th>
                <input type="text" name="serchvv">
            </Tr>
            <tr>
                <p>{{ bookcatalogs }}</p>
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
            bookcatalogs: '',
        }

    },

    //テスト組んでるだけです
    mounted() {
        axios.get('/api/search').then(response => {
            this.bookcatalogs = response.data.bookcatalogs;
        })
    }
}

</script>