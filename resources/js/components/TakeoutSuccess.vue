<template>
    <div class="container">
        <HeadContent />
        <h1>
            貸出手続きが完了しました。
        </h1>
        <FootText />
    </div>
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