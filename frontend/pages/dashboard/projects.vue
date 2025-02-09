<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})
</script>

<template>
  <div class="p-8">
    <p>Projects</p>
  </div>
</template>

<style scoped>

</style>
