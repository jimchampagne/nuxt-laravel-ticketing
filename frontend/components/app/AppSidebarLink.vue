<script setup lang="ts">
const props = defineProps<{
  to: string
  text: string
}>()
</script>

<template>
  <NuxtLink
    class="py-2 px-4 bg-transparent group !text-indigo-light hover:!bg-indigo-light hover:!text-raisin rounded-xl flex items-center gap-2"
    :to="props.to"
  >
    <Icon v-if="props.text === 'Dashboard'" name="lucide:house" class="fill-current hover:!text-raisin" />
    <Icon v-if="props.text === 'Projects'" name="lucide:boxes" class="fill-current hover:!text-raisin" />
    <Icon v-if="props.text === 'Boards'" name="lucide:clipboard-list" class="fill-current hover:!text-raisin" />
    <Icon v-if="props.text === 'Tickets'" name="lucide:tickets" class="fill-current hover:!text-raisin" />
    {{ props.text }}
  </NuxtLink>
</template>

<style scoped>

</style>