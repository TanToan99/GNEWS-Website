<template>
    <ul class="chat">
        <li class="left clearfix" v-for="(message, id) in messages" :key="id">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">{{ message.user.name }}: </strong>
                </div>
                <div class="body-chat">
                    <p>{{ message.message }}</p>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>