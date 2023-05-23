const app = Vue.createApp({
    data(){
        return {
            productType: "",
            url: ""
        }
    },
    methods:{
        getUrl(){
            this.url = "http://localhost/repos/products/public/productscontr/" + this.productType.toLowerCase()
        }
    }
}).mount("#app");