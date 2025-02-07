<script setup lang="ts">
const { data: projects } = await useApiFetch<Project>('/projects')
</script>

<template>
  <div>
    <h1 class="text-red-300">Todo List</h1>
  </div>
</template>

<style scoped></style>