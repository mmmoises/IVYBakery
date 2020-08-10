<template>
    <div class="row mt-5">
        <div class="col-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary border-0" @click.prevent="down()"  type="button"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                </div>
                <input type="number" name="number" class="form-control" v-model.number="quantity" placeholder="" aria-label="" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary border-0" @click.prevent="up()" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="col-5">
            <a class="btn btn-default btn-lg button-red" @click.prevent="addProduct()" href="#">ADD TO CART</a>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            id: 1,
            name: 'Beef Stake',
            price: 25.99,
            quantity: 1,
        };
    },

    methods: {
        up: function(){
           this.quantity++;
       },
       down: function(){
           if(!this.quantity<=1){
                this.quantity--;
           }      
       },

        addProduct: function(){
           const params = {
                    id:  this.id,
                    name: this.name,
                    price: this.price,
                    quantity: this.quantity
                };


                axios.post('/api-store', params)
                .then((response) => {
                    console.log(response.data);
                    const params = {
                        id:  this.id,
                        name: this.name,
                        price: this.price,
                        quantity: this.quantity
                    };
                    //miniToastr.success('listo');
                    this.quantity =1;
                    this.$root.$emit('addCart',params);
                });

       }

    }
}
</script>

<style>

</style>