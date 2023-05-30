<template>
    <HeadContent />
    <tr>
        この内容で変更しますか?
    </tr>
    <router-link to="/editSuccess"></router-link>
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