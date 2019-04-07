<template>
    <div class="m-messenger__messages m-scrollable">
        <div class="m-messenger__wrapper" v-for="message in messages">
            <div v-bind:class="[message.usuario.idusuario==usuario?class_salida:class_entrada]">
                <div v-if="message.usuario.idusuario!=usuario" class="m-messenger__message-pic">
                    <img src="assets/app/media/img//users/user3.jpg" alt="" />
                </div>
                <div class="m-messenger__message-body">
                    <div class="m-messenger__message-arrow"></div>
                    <div class="m-messenger__message-content">
                        <div v-if="message.usuario.idusuario!=usuario" class="m-messenger__message-username">
                            {{ message.usuario.usuario }}
                        </div>
                        <div class="m-messenger__message-text" v-if="message.message" v-text="message.message"></div>
                        <div class="m-messenger__message-text" v-else v-text="message.mensaje"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props: [
            'messages',
            'usuario'
        ],
        data(){
            return {
                class_entrada: 'm-messenger__message m-messenger__message--in',
                class_salida: 'm-messenger__message m-messenger__message--out'
            }
        }
    };
</script>
