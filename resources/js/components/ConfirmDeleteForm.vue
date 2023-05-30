<template>
    <HeadContent />
    <tr>
        削除しますか?
    </tr>
    <router-link to="/deleteSuccess"></router-link>
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