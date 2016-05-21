var Vue         = require('vue');

import SingleProduct from './components/SingleProduct.vue';
import Cart from './components/Cart.vue';
import CreateEvent from './components/CreateEvent.vue';
import EditProduct from './components/EditProduct.vue';
import EditEvent from './components/EditEvent.vue';
import CreateProduct from './components/CreateProduct.vue';

new Vue({

	el : '#app',

	components : {SingleProduct, Cart, CreateEvent, EditProduct, EditEvent, CreateProduct}

});



