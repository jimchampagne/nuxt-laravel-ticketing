<script setup lang="ts">
const props = defineProps<{
  to: string
  text: string
}>()
</script>

<template>
  <NuxtLink
    class="py-2 px-4 bg-transparent group !text-white hover:!bg-primary hover:!text-dark rounded-xl flex items-center gap-2"
    :to="props.to"
  >
    <Icon v-if="props.text === 'Dashboard'" name="lucide:house" class="!text-primary fill-current group-hover:!text-dark transition ease-in-out duration-250" />
    <Icon v-if="props.text === 'Projects'" name="lucide:boxes" class="!text-primary fill-current group-hover:!text-dark transition ease-in-out duration-250" />
    <Icon v-if="props.text === 'Boards'" name="lucide:clipboard-list" class="!text-primary fill-current group-hover:!text-dark transition ease-in-out duration-250" />
    <Icon v-if="props.text === 'Tickets'" name="lucide:tickets" class="!text-primary fill-current group-hover:!text-dark transition ease-in-out duration-250" />
    {{ props.text }}
  </NuxtLink>
</template>

<style scoped>

</style>
