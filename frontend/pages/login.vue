<script setup lang="ts">
definePageMeta({
  layout: 'auth',
})

const { login } = useSanctumAuth()

const credentials = {
  email: 'jim.chmpgn@gmail.com',
  password: '1048',
}

async function authenticate() {
  await login(credentials)
}


</script>

<template>
  <div class="flex flex-col gap-4">
    <button class="border-[1px] border-solid" @click="authenticate()">Login</button>
  </div>
</template>

<style scoped>

</style>