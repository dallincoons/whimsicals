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
                quantity : 0
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

        }
    }

</script>
