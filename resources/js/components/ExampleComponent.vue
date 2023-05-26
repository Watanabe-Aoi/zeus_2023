<template>
    <div class="container">
        <HeadContent />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <FootText />
    </div>
</template>

<script>
    import HeadContent from './HeadContent.vue';
    import FootText from './FootText.vue';

    export default {
        components:{
            HeadContent,
            FootText,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
