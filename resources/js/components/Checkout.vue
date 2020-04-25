<template>
    <div class="bg-white border p-3 rounded">
        <header class="text-center pt-2">
            <h5 class="mb-0">Order details</h5>
        </header>
        <hr>
        <div class="table-responsive">
            <table class="table table-borderless table-sm mb-0">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
                <tr v-for="cart in products">
                    <td>
                        <span>{{ cart.product.name }} <b>× {{ cart.quantity }}</b></span>
                    </td>
                    <td>
                        <span><b class="price">{{ getPrice(cart.product.price) }}</b></span>
                    </td>
                </tr>
                <tr>
                    <td><b>Delivery</b></td>
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" id="delivery" name="delivery" aria-label="Delivery" value="1" v-model="delivery" checked>
                                </div>
                                <label for="delivery" class="input-group-text rounded-right bg-white">{{ getPrice(deliveryPrice) }}</label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="text-right">
            <ul id="currency-exchanger" class="nav nav-pills justify-content-end my-2">
                <li v-for="(currency, i) in currencies" class="nav-item">
                    <button type="button" class="btn btn-sm" @click="index = i" v-bind:class="i === index ? 'btn-success' : ''">{{ currency.title }}</button>
                </li>
            </ul>
            <input type="hidden" name="price" :value="totalPrice">
            <p>Total price: <b class="price">{{ getPrice(totalPrice) }}</b> <span v-show="delivery">(including delivery)</span></p>
            <div class="side-note mb-2">
                <small>By placing order, you agree with our Policy.</small>
            </div>
            <button class="btn btn-outline-success" type="submit">Place order</button>
        </div>
    </div>
</template>

<script>

    export default {

        props:{
            products: Array
        },

        data(){
            return{
                currencies:[
                    {
                        'title' : 'USD',
                        'sign' : '$'
                    },
                    {
                        'title' : 'EUR',
                        'sign' : '€'
                    },
                ],
                index:0,
                delivery:true,
                difference:1,
                deliveryPrice:5
            }
        },

        watch:{

            index(){
                return this.index === 0 ? this.difference = 1 : this.fetchCurrency();
            }

        },

        computed:{

            totalPrice(){

                let price = this.products.reduce(function(x, y){
                    return x + (parseInt(y.product.price) * parseInt(y.quantity));
                }, 0);
                return price += this.delivery ? 5 : 0;

            }

        },

        methods:{

            getPrice(price){
                return this.currencies[this.index].sign+(price * this.difference).toFixed(2).toLocaleString();
            },

            fetchCurrency() {

                $.ajax({
                    method: 'get',
                    url: `https://api.exchangeratesapi.io/latest?base=USD`,
                    success:  response => this.difference = response.rates[this.currencies[this.index].title],
                    error: e => console.log(e)
                });

            }

        }

    }

</script>
