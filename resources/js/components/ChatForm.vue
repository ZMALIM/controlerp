<template>
    <div class="m-messenger__form">
        <div class="m-messenger__form-controls">
            <input
                type="text"
                name="message"
                class="m-messenger__form-input"
                placeholder="Escribe tu mensaje aqui"
                v-model="NuevoMensaje"
                @keyup.enter="sendMessage"
                @keyup="sendTypingEvent">
        </div>
        <div class="m-messenger__form-tools">
            <a href="" class="m-messenger__form-attachment">
                <i class="la la-paperclip"></i>
            </a>
        </div>
    </div>
</template>

<script>
    export default{
        props: ['usuario'],
        data(){
            return {
                NuevoMensaje: ''
            }
        },
        methods: {
            sendTypingEvent() {
                Echo.join('chat')
                    .whisper('typing', this.usuario);
            },
            sendMessage(){
                this.$emit('messagesent', { //evento de envio a axios = Form
                    usuario: this.usuario,
                    mensaje: this.NuevoMensaje
                });
                this.NuevoMensaje = ''
            }
        }
    };
</script>
