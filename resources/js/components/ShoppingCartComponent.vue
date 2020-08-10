<template>
  
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle extra-nav-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-shopping-bag">
            <span class="badge badge-danger badge-icon">{{itemsNumber}}</span>
            </i>
        </a>
        <div class="dropdown-menu extra-dropdown-shopping-bag p-3" aria-labelledby="navbarDropdownMenuLink">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-0" scope="col">Product</th>
                        <th class="border-0" scope="col">#</th>
                        <th class="border-0" scope="col">Total</th>
                        <th class="border-0" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in list" :key="item.id">
                        <td>{{item.name}}</td>
                        <td>{{item.quantity}}</td>
                        <td> {{subtotal(item)}}</td>
                        <td><button class="btn border-0" @click.prevent="remove(item)"> <i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <th class="border-bottom-0" scope="col">TOTAL</th>
                        <th class="border-bottom-0" scope="col">{{itemsNumber}}</th>
                        <th class="border-bottom-0" scope="col">{{total}}</th>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <a class="btn button-red " href="/checkout">Checkout</a>
            </div>
            
        </div>
    </li>
</template>

<script>
export default {
    data(){
        return{
            list:[
                {id:1, name: "stake", price:23, quantity:2},
                {id:2, name: "yeast bread", price:234, quantity:3}
            ]
        };
    },

    mounted(){

        axios.get("/api-init").then(response => {
            console.log(response.data);
            this.list = response.data;
        });

    },

    created(){
        this.$root.$on('addCart',data =>{

			var found = this.list.findIndex(function(element) { 
				 return element.id == data.id
			}); 
			
			
			if(found>=0){
				this.list[found].quantity = this.list[found].quantity + data.quantity;
				//this.cart.total =  parseInt(this.cart.total) + this.getSubPriceN(data.product.id, data.quantity) ;
				//this.cart.total = newSubtotal ;
				
			}else{
				//this.products.push(data.product);
				//this.cart.total =  parseInt(this.cart.total) + this.getSubPriceN(data.product.id, data.quantity) ;
				const params = {
                    id:  data.id,
                    name: data.name,
                    price: data.price,
                    quantity: data.quantity
				};
				this.list.push(params);
				
			}
			//this.cart.noItems = this.cart.noItems + data.quantity;
			//notifier.notify("success", "Successfully logged in!");
        });

    },

    computed:{
        itemsNumber: function(){
            var items = 0;
            this.list.forEach(element => items += element.quantity);
            return items;
        },

        total: function(){
            var total = 0;
            this.list.forEach(element => total+= (element.quantity * element.price));
            return total;
        }
    },

    methods:{
        remove: function(item) {
            this.list.splice(this.list.indexOf(item), 1);
            //remove one element starting from the element 'item'

            axios.get("/api-remove?id="+item.id).then(response => {
                console.log(response.data);
            });
        },

        subtotal: function(item){
            return item.price * item.quantity;
        }
    }

}
</script>

<style>

</style>