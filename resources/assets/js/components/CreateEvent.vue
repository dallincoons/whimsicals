<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    var vue = new Vue({

        el : "#add_event",

        data : function(){

            return {

                dateType : 'single'

            }

        },

        ready(){


        }

    });

</script>