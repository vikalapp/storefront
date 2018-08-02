<template>
    <div>
        <input type="button" value="Add to cart"  class="ui right floated button primary" @click="addToCart"/>
    </div>
</template>

<script>
    export default {
        props: [],
        components: {

        },
        data() {

            let data = {
                interval: null,

            };

            return data;
        },
        created: function() {

        },
        methods: {

            addToCart: function(){
                alert(1);
            }

        }
    }
</script>