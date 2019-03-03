
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import swal from 'sweetalert';

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


const files = require.context('./components/', true, /\.vue$/i)

files.keys().map(key => {
    return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            products: [],
            selectedPack: 6,
            cart: {}
        }
    },
    created () {
    },
    methods: {
        addToCart(e) {
            let productId = e.target.id.split('-')[3]
            let selectedPack = 6
            console.log(productId)
            let pack = this.selectedPack

            console.log(pack)

        },
        toggleCartSlider() {
            const cartSlider = document.getElementById('cart-slider')
            if(cartSlider.offsetWidth === 1) {
                cartSlider.style.height = '75vh'
                cartSlider.style.width = '80%'
            } else {
            cartSlider.style.height = '0'
            cartSlider.style.width = '0'
            }
            console.log(cartSlider.offsetWidth)

            // if (!cartSlider.classList.contains('cart-slider-active')) {
            //     cartSlider.classList.add('cart-slider-active')
            // } else {
            //     cartSlider.classList.remove('cart-slider-active')
            // }
        }
    },
    created() {
        this.products = [...document.getElementsByClassName('add-to-cart')];
    },
    mounted () {
        console.log(this.products)
    }
});
