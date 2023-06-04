<template>
    <v-container>
        <h1 class="text-h3 mb-5">Register</h1>
        <v-text-field label="Login"></v-text-field>
        <v-text-field label="Password" type="password"></v-text-field>
        <v-text-field label="Confirm password" type="password"></v-text-field>
        <v-btn color="primary" size="large">Submit</v-btn>
        <Link :href="route('login')" class="text-decoration-none ml-5">I have account</Link>
    </v-container>
</template>

<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
</script>
