<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: projects } = await useApiFetch<Project[]>('/projects')
</script>

<template>
  <div class="text-primary">
    <DashboardProject :projects="projects" />
  </div>
</template>

<style scoped></style>
