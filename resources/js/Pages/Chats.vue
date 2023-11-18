<script setup>
import {onMounted, ref} from "vue";
import MainLayout from "../Layouts/MainLayout.vue";
import ChatListItemComponent from "../Components/ChatListItemComponent.vue";

const $chatSearchElement = ref(null)
const chatsHeight = ref(null)

const setChatsHeight = () => {
    chatsHeight.value = document.body.clientHeight - $chatSearchElement.value.getBoundingClientRect().bottom - 100
}

window.addEventListener('resize', setChatsHeight)

onMounted(setChatsHeight)
</script>

<template>
    <main-layout>
        <h1 class="text-h3 mb-2">Chats</h1>
        <v-text-field
            variant="outlined"
            label="Search chats"
        />
        <div ref="$chatSearchElement"></div>
        <v-card>
            <v-infinite-scroll v-if="chatsHeight" :height="Number(chatsHeight)" :on-load="null">
                <v-list>
                    <chat-list-item-component
                        v-for="item in 100"
                        avatar="https://cdn.vuetifyjs.com/images/john.png"
                        last-message="Hello, how are you?"
                        :online="item % 3 === 0"
                        nickname="John Leider"
                        :value="item"
                    />
                </v-list>
            </v-infinite-scroll>
        </v-card>
    </main-layout>
</template>

<style scoped>

</style>
