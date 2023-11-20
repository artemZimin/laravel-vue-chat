<script setup>
const props = defineProps({
    nickname: String,
    online: Boolean
})
</script>

<template>
    <div class="d-flex align-center">
        <v-avatar color="surface-variant">
            <v-img
                src="https://cdn.vuetifyjs.com/images/john.jpg"
            />
        </v-avatar>
        <v-card variant="text">
            <template v-slot:title>
                <v-badge v-if="props.online" dot color="green">
                    {{ props.nickname }}
                </v-badge>
                <template v-else>{{ props.nickname }}</template>
            </template>
        </v-card>
    </div>
</template>

<style scoped>

</style>
