<template>
    <div class="container">
        <HeadContent />
        <h1>返却手続きが完了しました</h1>
        <lendingList :lending_book="book_catalog" />
        <table>
            <button class="btn btn-primary">この本を借りる</button>
            <button class="btn btn-primary">編集</button>
            <button class="btn btn-primary">削除</button>
        </table>
        <router-link to="listTakingoutResult">戻る</router-link>
        <FootText />
    </div>
</template>
<script>
import lendingList from './lendingList.vue';
import FootText from './FootText.vue'
import HeadContent from './HeadContent.vue';

export default {
    components: {
        lendingList,
        HeadContent,
        FootText,
    },
    data() {
        return {
            book_catalog: [],

        }
    }
}

</script>