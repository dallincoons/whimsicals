var Vue         = require('vue');

import SingleProduct from './components/SingleProduct.vue';
import Cart from './components/Cart.vue';
import CreateEvent from './components/CreateEvent.vue';

Vue.filter('subtotal', function (list) {

		console.log(list);

});

new Vue({

	el : '#app',

	components : {SingleProduct, Cart, CreateEvent}

});


