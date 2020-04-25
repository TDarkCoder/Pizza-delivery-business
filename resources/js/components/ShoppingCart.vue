<template>
    <section class="shopping-cart-list">
        <div v-show="loading" class="col-12 text-center my-3">
            <img src="/img/icons/loading.svg" class="loading-icon" alt="loading" width="80">
        </div>
        <div v-if="products.length > 0 && !loading " class="table-responsive">
            <table class="table">
                <tr>
                    <th>Action</th>
                    <th>Pizza</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                </tr>
                <tr v-for="(cart, index) in products">
                    <th scope="row">
                        <button class="btn btn-sm btn-outline-danger" type="button" @click="removeProduct(index, cart.product.id)">x</button>
                    </th>
                    <td>
                        <img :src="`/img/${cart.product.image}`" class="mr-1" :alt="cart.product.name" width="50">
                        <span>{{ cart.product.name }}</span>
                    </td>
                    <td>{{ cart.product.price }}$</td>
                    <td>
                        <label style="width:60px">
                            <input type="number" step="1" min="1" class="form-control form-control-sm" :id="`product_${cart.product.id}`" @input="updateCart(cart.product.id, index)" :value="cart.quantity">
                        </label>
                    </td>
                    <td>
                        {{ parseInt(cart.product.price) * parseInt(cart.quantity) }} $
                    </td>
                </tr>
            </table>
            <div class="text-right p-2">
                <h5 class="mb-3">Total price: <b>{{ totalPrice }}$</b></h5>
                <a href="/checkout" class="btn btn-outline-success">Place order</a>
            </div>
        </div>
        <div v-if="!loading && products.length < 1" class="my-4 py-4 border-top text-center">
            <h4>Your cart is empty</h4>
        </div>
    </section>
</template>

<script>

    import {isInteger} from "lodash";

    export default {

        data(){
            return{
                products:[],
                loading:true
            }
        },

        mounted(){
            this.fetchProducts()
        },

        computed:{

            totalPrice(){
                return this.products.reduce(function(x, y){
                    return x + (parseInt(y.product.price) * parseInt(y.quantity));
                }, 0);
            }

        },

        methods:{

            updateCart:_.debounce(function(product_id, index){

                const value = parseInt(document.getElementById(`product_${product_id}`).value);
                const quantity = isInteger(value) ? value : 1;

                try{
                    axios.post('/cart', {
                        product_id: product_id,
                        quantity : quantity
                    })
                }catch (e) {
                    console.log(e);
                }finally {
                    this.products[index].quantity = quantity;
                }

            }, 400),

            removeProduct(index, product_id){

                if(confirm('Are you sure to remove this product from your shopping cart?')){

                    this.loading = true;
                    axios.delete(`/cart/${product_id}`)
                        .then(() => {
                            this.products.splice(index, 1);
                            document.getElementById('cart-counter').innerText = parseInt(+document.getElementById('cart-counter').innerText) - 1;
                        })
                        .catch(e => console.log(e))
                        .finally(() => this.loading = false)

                }

            },

            fetchProducts(){

                this.loading = true;
                axios.get('/cart/user')
                    .then(response => this.products = response.data)
                    .catch(e => console.log(e))
                    .finally(() => this.loading = false)

            }

        }

    }

</script>
