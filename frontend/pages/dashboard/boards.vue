<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Boards } = await useApiFetch('/boards')
</script>

<template>
  <div class="overflow-hidden">
    <h2 class="font-bold mb-8">
      Boards
    </h2>
    <pre>
      {{ Boards }}
    </pre>
  </div>
</template>

<style scoped>

</style>
