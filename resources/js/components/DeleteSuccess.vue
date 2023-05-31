<template>
    <HeadContent />
    <tr>
        削除しました。
    </tr>
    <ul>
        <li><router-link to="/" class="btn btn-link">戻る</router-link></li>
    </ul>
    <FootText />
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