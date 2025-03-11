<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Projects } = await useApiFetch('/projects')
</script>

<template>
  <div class="overflow-hidden">
    <h2 class="font-bold mb-8">
      Projects
    </h2>
    <pre>
      {{ Projects }}
    </pre>
  </div>
</template>

<style scoped>

</style>
