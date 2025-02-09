<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Projects } = await useApiFetch('/projects')
</script>

<template>
  <div class="p-8">
    <p>Projects</p>
    <pre>
      {{ Projects }}
    </pre>
  </div>
</template>

<style scoped>

</style>
