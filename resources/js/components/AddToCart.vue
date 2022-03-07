<template>
    <div>
        <button class="btn site-btn btn-line" @click.prevent="addProductToCart()">ADD TO CART</button>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){

        },
        props:['productId','userId'],
        methods: {
                  addProductToCart(){
                // alert(this.productId);
                // chekin if user logged in
                if(this.userId ==0){
                    this.$toastr.e("you nedd to login to add product to cart");
                    return;
                }
                // if user logged in then add product to cart
                // let response=  axios.post('/cart' , {
                //     'product-id':this.productId,
                // });
                //  console.log(response.data);
                  let res= axios.post("/cart",{'product-id':this.productId,})
                 .then(res => {console.log(res)})
                 .catch(err=>{console.log(err)})
                // this.productId = res.data.donnee;
      },

                
            }
    

    }
</script>
