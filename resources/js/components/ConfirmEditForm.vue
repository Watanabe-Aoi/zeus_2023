<template>
    <div class="container">
        <HeadContent />
        <h2>
            この内容で変更しますか?
        </h2>
        <router-link to="/editSuccess"></router-link>
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