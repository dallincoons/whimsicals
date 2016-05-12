<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    import cartStore from '../stores/cartStore.js';

    export default {

        template : '#cartView',

        methods : {

            deleteItem : function(itemId){

                alert(itemId);

                Vue.http.post('/cart/remove', {itemId : itemId}).then(function (data) {

                    location.reload();

                });

            }

        }
    }
</script>