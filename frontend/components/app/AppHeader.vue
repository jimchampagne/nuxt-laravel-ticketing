<script setup lang="ts">
const { logout } = useSanctumAuth()

async function unauthenticate() {
  await logout()
}
</script>

<template>
  <div class="relative z-0 h-14 border-b-[2px] border-solid border-primary/50 flex justify-between sm:justify-end items-center gap-5 p-4 md:p-[16px_21px_16px_16px] w-full">
    <div class="absolute z-0 bottom-0 left-0 translate-y-[100%] w-full bg-linear-to-b from-primary/30 to-dark h-[58px]" />
    <!-- Profile -->
    <div class="flex items-center gap-2">
      <div class="rounded-full p-1 w-8 h-8 flex items-center justify-center bg-primary">
        <Icon name="lucide:user" class="text-dark fill-current" />
      </div>
      <p class="text-sm text-white">
        Jim Champagne
      </p>
    </div>
    <!-- Logout -->
    <button class="group/logout flex items-center justify-center rounded-[5px] group- cursor-pointer w-8 h-8 bg-primary ease-in-out duration-200" @click="unauthenticate()">
      <Icon name="lucide:log-out" class="fill-current text-dark group-hover/logout:text-white ease-in-out duration-200" />
    </button>
  </div>
</template>

<style scoped>

</style>
