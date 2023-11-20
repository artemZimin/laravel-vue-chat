<script setup>

import AuthLayout from "../Layouts/AuthLayout.vue";
</script>

<template>
    <auth-layout>
        <h2 class="text-h2 mb-3">Register</h2>
        <v-text-field label="Nickname" />
        <v-text-field label="Email" />
        <v-text-field type="password" label="Password" />
        <v-text-field type="password" label="Confirm password" />
        <v-btn color="primary">Register</v-btn>
    </auth-layout>
</template>

<style scoped>

</style>
