<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth']
})

const { logout } = useSanctumAuth()

async function unauthenticate() {
  await logout()
}
</script>

<template>
  <div>
    <button @click="unauthenticate()">Logout</button>
  </div>
</template>

<style scoped>

</style>