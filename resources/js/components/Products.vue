<template>
    <section class="menu-section">
        <div v-if="loading && products.length < 1" class="text-center my-3">
            <img src="/img/icons/loading.svg" class="loading-icon" alt="loading" width="80">
        </div>
        <div v-else class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 my-2" v-for="product in products">
                <article class="px-2 border rounded">
                    <header class="py-3 text-center border-bottom">
                        <h5 class="mb-0">{{ product.name }}</h5>
                    </header>
                    <article class="pt-3">
                        <img :src="`/img/${product.image}`" :alt="product.name" width="100%">
                        <div class="row align-items-center mx-0 py-3">
                            <div class="col-7 text-left">
                                <span><strong>{{ product.price }}$</strong></span>
                            </div>
                            <div class="col-5 text-right">
                                <CartButton :product="product"/>
                            </div>
                        </div>
                    </article>
                </article>
            </div>
            <div v-show="loading" class="col-12 text-center my-3">
                <img src="/img/icons/loading.svg" class="loading-icon" alt="loading" width="80">
            </div>
        </div>
        <div v-if="products.length > 0 && !stop" class="text-center mb-2 mt-3">
            <button class="btn btn-primary" type="button" @click="fetchProducts(products.length)">More</button>
        </div>
    </section>
</template>

<script>

    import CartButton from "./CartButton";

    export default {

        components:{
            CartButton
        },

        data(){
            return{
                products: [],
                loading:true,
                stop:false,
                limit:null
            }
        },

        mounted() {
            this.fetchProducts();
        },

        methods:{

            quantity(){

                axios.get('/products/all')
                    .then(response => this.limit = response.data)
                    .catch(e => console.log(e));

            },

            fetchProducts(offset = 0){

                this.loading =true;

                if(this.limit === null){
                    this.quantity();
                }

                if(!this.stop){
                    axios.get('/products', {
                        params:{
                            offset: offset
                        }
                    }).then(response => {
                            this.products = this.products.concat(response.data);
                            this.stop = this.products.length >= this.limit;
                        })
                        .catch(e => console.log(e))
                        .finally(()=>this.loading = false)
                }

            }

        }

    }

</script>

<style scoped>

    .loading-icon{
        animation: 2s rotate linear infinite;
    }
    @keyframes rotate {
        0%{transform:rotate(0)}
        50%{transform:rotate(-180deg)}
        100%{transform:rotate(-360deg)}
    }

</style>
