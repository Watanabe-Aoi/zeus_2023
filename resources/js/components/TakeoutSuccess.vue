<template>
    <HeadContent />
    <tr>
        貸出手続きが完了しました。
    </tr>
    <FootText />
</template>


<script>

import confirmTakeoutForm from './ConfirmTakeoutForm.vue';
import FootText from './FootText.vue';
import HeadContent from './HeadContent.vue';

export default ({

    components: {
        HeadContent,
        FootText,
    },

})
</script>