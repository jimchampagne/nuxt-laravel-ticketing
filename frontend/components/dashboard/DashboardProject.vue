<script setup lang="ts">
const props = defineProps<{
  projects: Project[] | null
}>()
</script>

<template v-if="projects">
    <div v-for="project in props.projects" :key="project.id" class="rounded-lg shadow-md mb-16 text-primary">
      <div class="mb-2 flex items-center gap-1 text-primary font-semibold">
        <Icon name="lucide:boxes" class="!h-[24px] !w-[24px]" />
        <h1>{{ project.title }}</h1>
      </div>
      <div class="flex gap-4 max-w-[calc(100vw-235px)] overflow-x-scroll overflow-hidden rounded-xl py-4">
        <DashboardProjectBoard :boards="project.boards" />
      </div>
    </div>
</template>

<style scoped>

</style>