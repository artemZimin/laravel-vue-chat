<script setup>
import {onMounted, ref} from "vue";

const $chatSearchElement = ref(null)
const chatsHeight = ref(null)

const setChatsHeight = () => {
    chatsHeight.value = document.body.clientHeight - $chatSearchElement.value.getBoundingClientRect().bottom - 100
}

window.addEventListener('resize', setChatsHeight)

onMounted(setChatsHeight)
</script>

<template>
    <v-app theme="dark">
        <v-app-bar title="Messenger" :elevation="2">
            <template v-slot:append>
                <v-btn icon="mdi-brightness-7"></v-btn>
                <v-btn icon="mdi-account"></v-btn>
            </template>
        </v-app-bar>
        <v-main>
            <v-container>
                <v-row>
                    <v-col offset-md="2" md="8" offset-lg="3" lg="6">
                        <h1 class="text-h3 mb-2">Chats</h1>
                        <v-text-field
                            variant="outlined"
                            label="Search chats"
                        />
                        <div ref="$chatSearchElement"></div>
                        <v-card>
                            <v-infinite-scroll v-if="chatsHeight" :height="chatsHeight" :on-load="null">
                                <v-list>
                                    <v-list-item
                                        v-for="item in 100"
                                        prepend-avatar="https://cdn.vuetifyjs.com/images/john.png"
                                        title="John Leider"
                                        :append-icon="item % 2 ? 'mdi-account-badge' : null"
                                        subtitle="Hello, how are you?"
                                        :value="item"
                                    >
                                    </v-list-item>
                                </v-list>
                            </v-infinite-scroll>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<style scoped>

</style>
