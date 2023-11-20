<script setup>

import MainLayout from "../Layouts/MainLayout.vue";
</script>

<template>
    <main-layout>
        <h1 class="text-h3 mb-2">Profile settings</h1>
        <div class="d-flex align-center flex-column mb-5">
            <v-avatar color="surface-variant" size="150">
                <v-img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                />
            </v-avatar>
        </div>
        <v-file-input label="Set new avatar" variant="outlined" />
        <div class="mb-3">
            <h2 class="text-h5 mb-2">Change nickname</h2>
            <v-text-field label="Nickname" />
            <v-btn size="large">Save</v-btn>
        </div>
        <div>
            <h2 class="text-h5 mb-2">Change password</h2>
            <v-text-field label="Old password" />
            <v-text-field label="New password" />
            <v-btn size="large">Save</v-btn>
        </div>
    </main-layout>
</template>

<style scoped>

</style>
