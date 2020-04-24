<template>
    <a href="/cart" v-if="status" class="btn btn-light">
        <img src="/img/icons/eye.svg" alt="Go to cart" width="20">
    </a>
    <button v-else class="btn btn-light" type="button" @click="save" :disabled="disabled">
        <img src="/img/icons/add-to-cart.svg" alt="Add to cart" width="20">
    </button>
</template>

<script>

    export default {

        props:{
            product: Object
        },

        data(){
            return{
                status:false,
                disabled:false
            }
        },

        mounted() {
            this.status = this.product.saved;
        },

        methods:{

            async save(){

                this.disabled = true;
                this.status = !this.status;
                document.getElementById('cart-counter').innerText = parseInt(+document.getElementById('cart-counter').innerText) + 1;

                try{
                    axios.post(`/cart`, {
                        product_id: this.product.id,
                        quantity: 1
                    })
                }catch (e) {
                    console.log(e)
                }
                finally {
                    this.disabled = false;
                }

            }

        }

    }

</script>

<style scoped>

</style>
