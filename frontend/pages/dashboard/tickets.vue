<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Tickets } = await useApiFetch('/tickets')
</script>

<template>
  <div class="p-8">
    <p>Tickets</p>
    <pre>
      {{ Tickets }}
    </pre>
  </div>
</template>

<style scoped>

</style>
