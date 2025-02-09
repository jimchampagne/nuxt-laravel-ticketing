<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Boards } = await useApiFetch('/boards')
</script>

<template>
  <div class="p-8">
    <p>Boards</p>
    <pre>
      {{ Boards }}
    </pre>
  </div>
</template>

<style scoped>

</style>
