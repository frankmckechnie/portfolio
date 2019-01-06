//import './bootstrap';
import Vue from 'vue';

import './bootstrap';
import './classes/Events';

// main component
import App from './App'


const app = new Vue({
    el: '#app',
    components: { App }
});
