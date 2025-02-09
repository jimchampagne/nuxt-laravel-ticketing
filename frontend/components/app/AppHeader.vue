<script setup lang="ts">
const { logout } = useSanctumAuth()

async function unauthenticate() {
  await logout()
}
</script>

<template>
  <div class="h-14 border-b-[2px] border-solid border-indigo/20 flex justify-end items-center gap-5 p-4">
    <div class="flex items-center gap-2">
      <div class="rounded-full p-1 w-8 h-8 flex items-center justify-center bg-indigo">
        <Icon name="lucide:user" class="text-indigo-light fill-current" />
      </div>
      <p class="text-sm text-indigo-light">Jim Champagne</p>
    </div>
    <button class=" flex group items-center justify-center rounded-full w-8 h-8 bg-indigo ease-in-out duration-200" @click="unauthenticate()">
      <Icon name="lucide:log-out" class="fill-current text-indigo-light group-hover:text-raisin ease-in-out duration-200" />
    </button>
  </div>
</template>

<style scoped>

</style>