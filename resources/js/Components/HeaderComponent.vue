<script setup>
import { Link as InertiaLink } from "@inertiajs/vue3";
import { useThemeStore } from "../Store/themeStore.js";

const themeStore = useThemeStore()

const toggleTheme = () => {
    themeStore.toggleTheme()
}
</script>

<template>
    <v-app-bar :elevation="2">
        <template v-slot:title>
            <inertia-link href="/chats" style="text-decoration:none; color: initial">
                Messenger
            </inertia-link>
        </template>
        <template v-slot:append>
            <v-btn icon="mdi-brightness-7" @click="toggleTheme" />
            <inertia-link href="/profile/1" as="div">
                <v-btn icon="mdi-account"></v-btn>
            </inertia-link>
            <inertia-link href="/login" as="div">
                <v-btn icon="mdi-logout"></v-btn>
            </inertia-link>
        </template>
    </v-app-bar>
</template>

<style scoped>

</style>
