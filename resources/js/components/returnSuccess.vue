<template>
    <div class="container">
        <HeadContent />
        <h1>返却手続きが完了しました</h1>
        <lendingList :lending_books="lending_books" />
        <table>
            <button class="btn btn-primary">この本を借りる</button>
            <button class="btn btn-primary">編集</button>
            <button class="btn btn-primary">削除</button>
            <button class="btn btn-primary">戻る</button>
        </table>
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