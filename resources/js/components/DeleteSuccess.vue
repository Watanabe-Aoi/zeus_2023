<template>
    <div class="container">
        <HeadContent />
        <h2>
            削除しました。
        </h2>
        <ul>
            <li><router-link to="/" class="btn btn-link">戻る</router-link></li>
        </ul>
        <FootText />
    </div>
    
</template>

<script>

import FootText from './FootText.vue';
import HeadContent from './HeadContent.vue';

export default ({

    components: {
        HeadContent,
        FootText,
    },

})
</script>
<style>
ul {
    list-style: none;
}
</style>