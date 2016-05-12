var Vue         = require('vue');

import SingleProduct from './components/SingleProduct.vue';
import Cart from './components/Cart.vue';


new Vue({

	el : '#app',

	components : {SingleProduct, Cart}

});