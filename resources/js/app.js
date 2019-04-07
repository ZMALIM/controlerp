
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./ubigeo');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data: {
        messages: [],
        users: [],
    },

    created() {
        console.log("desde created");
        //carga los mensajes para mostrar
        this.fetchMessages();

        Echo.join('chat')
            .here(users => {
                this.users = users;
            })
            .joining(user => {
                this.users.push(user);
            })
            .leaving(user => {
                this.users = this.users.filter(u => u.idusuario !== user.idusuario);
            })
            .listenForWhisper('typing', (e) => {
                console.log("jaja");
            })
            .listen('EnviarMensaje', (event) => { //El evento app/events
                this.messages.push({
                    message: event.Mensaje.message, //mismo campo de la BD
                    usuario: event.Usuario
                });

                this.users.forEach((user, index) => {
                    if (user.idusuario === event.Usuario.idusuario) {
                        user.typing = false;
                        this.$set(this.users, index, user);
                    }
                });
            });
    },
    methods: {
        fetchMessages(){
            axios.get('/mensajes').then(response => {
                this.messages = response.data;
                console.log(response.data);
            });
        },

        addMessage(message){
            this.messages.push(message);
            axios.post('/mensajes', message).then(response => {
                console.log(response.data);
            });
        }
    }
});
