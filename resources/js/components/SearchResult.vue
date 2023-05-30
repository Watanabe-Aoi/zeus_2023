<template>
    <table>
        <HeadContent />
        <FootText />
    </table>
</template>

<script>

import FootText from './FootText.vue';
import HeadContent from './HeadContent.vue';
import axios from 'axios';

export default {

    components: {
        HeadContent,
        FootText,
    },
}

</script>