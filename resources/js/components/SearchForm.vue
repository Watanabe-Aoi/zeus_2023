<template>
    <table>
        <Header />
        <div class="h">

            <Tr>
                <th>検索範囲：</th>
                <select v-model="value">
                    <option value="1">図書ID</option>
                    <option value="2">タイトル</option>
                    <option value="3">著者</option>
                    <option value="1">訳者</option>
                    <option value="2">出版社</option>
                    <option value="3">出版日</option>
                    <option value="1">ISBN番号</option>
                    <option value="2">備考</option>
                    <option value="3">キーワード</option>
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
    </table>
</template>
<script>
import Footer from './Footer.vue';
import Header from './Header.vue';

export default {

    components: {
        Header,
        Footer,
    },
    data() {
        return {
            value: '',
        }

    },

}

</script>