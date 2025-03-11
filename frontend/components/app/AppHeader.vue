<script setup lang="ts">
const { logout } = useSanctumAuth()

async function unauthenticate() {
  await logout()
}
</script>

<template>
  <div class="h-14 border-b-[2px] border-solid border-secondary/20 flex justify-end items-center gap-5 p-4">
    <!-- Profile -->
    <div class="flex items-center gap-2">
      <div class="rounded-full p-1 w-8 h-8 flex items-center justify-center bg-primary">
        <Icon name="lucide:user" class="text-dark fill-current" />
      </div>
      <p class="text-sm text-white">Jim Champagne</p>
    </div>
    <!-- Logout -->
    <button class="group/logout flex items-center justify-center rounded-[5px] group- cursor-pointer w-8 h-8 bg-primary ease-in-out duration-200" @click="unauthenticate()">
      <Icon name="lucide:log-out" class="fill-current text-dark group-hover/logout:text-white ease-in-out duration-200" />
    </button>
  </div>
</template>

<style scoped>

</style>
