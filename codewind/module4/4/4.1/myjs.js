const app = Vue.createApp({
    data() {
        return {
            cost: 10,
            amount: 5
        }
    },
    methods: {


    },
    computed: {
        price() {
            return this.cost * this.amount;
        }
    },

}).mount('#app');














