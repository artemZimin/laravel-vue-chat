<script setup>

import CoreLayout from "./CoreLayout.vue";
import HeaderComponent from "../Components/HeaderComponent.vue";
</script>

<template>
    <core-layout>
        <template v-slot:header>
            <header-component />
        </template>
        <slot/>
        <template v-slot:footer>
            <slot name="footer" />
        </template>
    </core-layout>
</template>

<style scoped>

</style>
