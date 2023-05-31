<template>
    <div class="container">

        <HeadContent />
        <tr>
            削除しますか?
        </tr>
        <router-link to="/deleteSuccess"></router-link>
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