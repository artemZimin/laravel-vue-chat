<script setup>
import { useThemeStore } from "../Store/themeStore.js";

const themeStore = useThemeStore()
</script>

<template>
    <v-app :theme="themeStore.theme">
        <slot name="header"></slot>
        <v-main>
            <v-container>
                <v-row>
                    <v-col offset-md="2" md="8" offset-lg="3" lg="6">
                        <slot></slot>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
        <slot name="footer" />
    </v-app>
</template>

<style scoped>

</style>
