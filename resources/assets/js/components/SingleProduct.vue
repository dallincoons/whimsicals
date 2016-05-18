<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    import cartStore from '../stores/cartStore.js';

    export default {

        template : '#singleProductView',

        data : function () {

            return {
                id       : '',
                quantity : 0,
                products : []
            }
        },

        props : ['quantity', 'product_id'],

        methods : {

            addToCart : function () {

                var clientinfo = {
                    quantity   : this.quantity,
                    product_id : this.product_id
                };

                Vue.http.post('/cart/add', clientinfo).then(function (data) {
                    console.log(data);
                });
                cartStore.add(this.product_id, this.quantity);

            }

        },

        ready(){

            var self = this;

            var shopClient = ShopifyBuy.buildClient({
                apiKey: 'f0bd6bfdeb865f6b4e81eba5e6bdb361',
                myShopifyDomain: 'dallincoons',
                appId: '6'
            });

            shopClient.fetchQueryProducts({collection_id: 234516614})
                    .then(function (product) {
                        console.log(product[0].attrs);
                        console.log(product[0].options);
                        console.log(product[0].selectedVariant);

                        self.$set('products', product);

                    });
        }
    }

</script>
