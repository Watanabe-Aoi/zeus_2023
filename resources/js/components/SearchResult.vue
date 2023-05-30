<template>
    <table>
        <HeadContent />
        <div>
            <tr>{{ count }}件見つかりました。</tr>
        </div>
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
    data() {
        return {
            count: 0,
        }
    },
}

</script>