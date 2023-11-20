<script setup>

import MainLayout from "../Layouts/MainLayout.vue";
import MessageComponent from "../Components/MessageComponent.vue";
import UserIndicatorComponent from "../Components/UserIndicatorComponent.vue";

</script>

<template>
    <main-layout>
        <v-infinite-scroll side="start">
            <message-component
                v-for="key of 20"
                :title="'Message ' + key"
                :time="Date.now()"
                :incoming="key % 3 === 0"
            />
        </v-infinite-scroll>
        <template v-slot:footer>
            <v-footer app>
                <v-container>
                    <v-row>
                        <v-col offset-md="2" md="8" offset-lg="3" lg="6">
                            <user-indicator-component nickname="Artem Zimin" online class="mb-2" />
                            <v-text-field
                                class="message-text-field"
                                label="Type a message"
                                type="text"
                                append-inner-icon="mdi-send"
                                @click:append-inner="null"
                                hide-details
                            />
                        </v-col>
                    </v-row>
                </v-container>
            </v-footer>
        </template>
    </main-layout>
</template>

<style scoped>

</style>
