<script setup>

import AuthLayout from "../Layouts/AuthLayout.vue";
</script>

<template>
    <auth-layout>
        <h2 class="text-h2 mb-3">Login</h2>
        <v-text-field label="Email" />
        <v-text-field type="password" label="Password" />
        <v-btn color="primary">Login</v-btn>
    </auth-layout>
</template>

<style scoped>

</style>
