<script setup lang="ts">
const props = defineProps<{
  projects: Project[] | null
}>()
</script>

<template v-if="projects">
  <div v-for="project in props.projects" :key="project.id" class="mb-16 relative">
    <div class="absolute right-0 top-0 w-[50px] sm:w-[100px] h-full bg-linear-to-l from-dark to-transparent" />

    <div class="mb-2 flex items-center gap-2 font-semibold">
      <Icon name="lucide:boxes" class="!h-[24px] !w-[24px]" />
      <h1 class="text-white ">
        {{ project.title }}
      </h1>
    </div>
    <div class="flex gap-4 overflow-x-scroll rounded-xl py-4">
      <DashboardProjectBoard :boards="project.boards" />
    </div>
  </div>
</template>

<style scoped>

</style>
