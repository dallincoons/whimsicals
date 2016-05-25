<script>

    var Vue = require('vue');

    require('vue-resource');
    Vue.use(require('vue-resource'));
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    var vue = new Vue({

        el : "#update_event",

        data : function(){

            return {

                dateType : 'single'

            }

        },

        methods : {

            deleteEvent : function(id){

                Vue.http.delete('/events/' + id).success(function (data) {

                    window.location = "/events/edit";

                });

            }
        }

    });

</script>