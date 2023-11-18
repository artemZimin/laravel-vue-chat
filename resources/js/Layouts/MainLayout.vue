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
    </core-layout>
</template>

<style scoped>

</style>
