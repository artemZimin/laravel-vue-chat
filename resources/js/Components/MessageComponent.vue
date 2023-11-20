<script setup>
const props = defineProps({
    incoming: Boolean,
    message: String,
    time: Number
})
</script>

<template>
    <div class="my-4" :class="{'d-flex': !props.incoming, 'justify-end': !props.incoming}">
        <v-card
            variant="tonal"
            width="60%"
            :color="props.incoming ? 'primary' : null"
            :text="props.message"
            :subtitle="(new Date(props.time)).toLocaleString()"
        />
    </div>
</template>

<style scoped>

</style>
