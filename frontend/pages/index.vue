<script setup lang="ts">
const { data: tasks } = await useApiFetch<Task[]>('/tasks')
</script>

<template>
  <div>
    <h1 class="text-red-300">Todo List</h1>
    <ul>
      <li v-for="task in tasks" :key="task.id" class="flex items-center gap-1">
        <p>{{ task.title }}</p>
        -
        <Icon v-if="task.completed" name="lucide:circle-check-big" class="text-green-500 fill-current" />
        <Icon v-else name="lucide:circle-x" class="text-red-500 fill-current" />
      </li>


    </ul>
  </div>
</template>

<style scoped></style>