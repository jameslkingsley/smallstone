require('./bootstrap');

window.Vue = require('vue');

window.EventBus = new class {
    constructor() {
        this.vue = new Vue();
    }

    fire(event, data = null) {
        this.vue.$emit(event, data);
    }

    listen(event, callback) {
        this.vue.$on(event, callback);
    }

    listenOnce(event, callback) {
        this.vue.$once(event, callback);
    }
}

Vue.component('contact-form', require('./components/Contact.vue'));

const app = new Vue({
    el: '#app',

    methods: {
        getStarted() {
            // alert('Get Started!');
            EventBus.fire('contact');
        }
    }
});
