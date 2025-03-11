<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Tickets } = await useApiFetch('/tickets')
</script>

<template>
  <div class="overflow-hidden">
    <h2 class="font-bold mb-8">
      Tickets
    </h2>
    <pre>
      {{ Tickets }}
    </pre>
  </div>
</template>

<style scoped>

</style>
