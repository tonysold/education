const app = Vue.createApp({
    data() {
    return {
    fullName: '',
    surname: '',
    firstName: '',
    patronymic: ''
    }
    },
    methods: {
    splitName() {
    const nameParts = this.fullName.split(' ');
    
    this.surname = nameParts[0] || '';
    this.firstName = nameParts[1] || '';
    this.patronymic = nameParts[2] || '';
    }
    }
    }).mount('#app');