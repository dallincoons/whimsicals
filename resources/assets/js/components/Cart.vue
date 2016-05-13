<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    import cartStore from '../stores/cartStore.js';

    export default {

        template : '#cartView',

        props : ['cart-items', 'total'],

        created(){

            this.cartItems = JSON.parse(this.cartItems)

        },

        methods : {

            deleteItem : function(itemId){

                var self = this;

                Vue.http.post('/cart/remove', {itemId : itemId}).then(function (data) {

                    self.total = data.total;

                    location.reload();

                });

            },
            updateItem : function(rowid, quantity){

                var self = this;

                Vue.http.post('/cart/update', {rowid : rowid, quantity : quantity}).then(function(data){

                    self.total = data.total;

                    location.reload();

                });

            }
        }
    }
</script>