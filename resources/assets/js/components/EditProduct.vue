<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    var vue = new Vue({

        el : "#update_product",

        data : function(){

            return {


            }

        },

        methods : {

            deleteProduct : function(id){

                Vue.http.delete('/products/' + id).success(function (data) {

                    window.location = "/products/edit";

                });

            }
        }

    });

</script>