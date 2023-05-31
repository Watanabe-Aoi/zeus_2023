<template>
    <div class="container">
        <HeadContent />

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