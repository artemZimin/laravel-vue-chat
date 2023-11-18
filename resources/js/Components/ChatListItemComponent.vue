<script setup>
const props = defineProps({
    online: Boolean,
    nickname: String,
    lastMessage: String,
    value: Number,
    avatar: String
})
</script>

<template>
    <v-list-item
        :prepend-avatar="props.avatar"
        :title="props.nickname"
        :append-icon="props.online ? 'mdi-account-badge' : null"
        :subtitle="props.lastMessage"
        :value="props.value"
    >
    </v-list-item>
</template>

<style scoped>

</style>
