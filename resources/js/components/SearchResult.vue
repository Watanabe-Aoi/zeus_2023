<template>
    <table>
        <HeadContent />
        <div>
            <tr>{{ count }}件見つかりました。</tr>
            <table>
                <tr>
                    <th>著者：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>訳者：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>出版社：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>出版日：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>キーワード：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>ISBN：</th>
                    <td>{{ }}</td>
                    <td></td>
                    <td></td>
                    <th>図書ID：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>登録日：</th>
                    <td>{{ }}</td>
                    <td></td>
                    <td></td>
                    <th>状態：</th>
                    <td>{{ }}</td>
                </tr>
                <tr>
                    <th>備考：</th>
                    <td>{{ }}</td>
                </tr>
                <button class="btn btn-primary" v-on:click="takeoutForm">この本を返却する</button>
                <button class="btn btn-primary" v-on:click="editForm">編集</button>
                <button class="btn btn-primary" v-on:click="deleteForm">削除</button>

            </table>
        </div>
        <FootText />
    </table>
</template>

<script>

import FootText from './FootText.vue';
import HeadContent from './HeadContent.vue';
import ListTakingoutResult from './listTakingoutResult.vue';
import axios from 'axios';

export default {

    components: {
        HeadContent,
        FootText,
        ListTakingoutResult,
    },
    data() {
        return {
            count: 0,
        }
    },
    methods: {
        takeoutForm() {
            this.$router.push('/confirmTakeoutForm')
        },
        editForm() {
            this.$router.push('/editForm')
        },
        deleteForm() {
            this.$router.push('/confirmDeleteForm')
        },
    },
}

</script>