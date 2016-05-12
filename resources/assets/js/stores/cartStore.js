var Vue = require('vue');

export default {
	state : {
		items : []
	},
	add(product_id, quantity){

		if(product_id in this.state.items){
			return;
		}

		this.state.items[product_id] = quantity;

		// Vue.http.post('/cart/add', this.state.items);

		console.log('You added ' + quantity +' things with a product id of ' + product_id  +' to a cart - yay!!!!!!');

	}
};