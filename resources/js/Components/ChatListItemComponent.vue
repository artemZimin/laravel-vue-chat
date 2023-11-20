<script setup>
import { Link as InertiaLink } from "@inertiajs/vue3";

const props = defineProps({
    online: Boolean,
    nickname: String,
    lastMessage: String,
    value: Number,
    avatar: String
})
</script>

<template>
    <inertia-link href="/chat/1" as="div">
        <v-list-item
            :prepend-avatar="props.avatar"
            :title="props.nickname"
            :append-icon="props.online ? 'mdi-account-badge' : null"
            :subtitle="props.lastMessage"
            :value="props.value"
        >
        </v-list-item>
    </inertia-link>
</template>

<style scoped>

</style>
