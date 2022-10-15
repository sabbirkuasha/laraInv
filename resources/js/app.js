// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

import App from './components/App';
require('./bootstrap');
const app = new App({
    target: document.querySelector('#svelte-app')
});
