<script lang="ts" setup>
</script>

<template>
  <div class="relative min-h-screen min-w-screen flex flex-col overflow-hidden">
    <div class="flex flex-1 w-full h-full">
      <AppSidebar class="hidden sm:block" />
      <div class="w-full flex flex-col">
        <AppHeader />
        <!-- Content -->
        <div class="w-full sm:max-w-[calc(100vw-191px)] z-10 p-[60px_16px_16px_16px]">
          <slot />
        </div>
      </div>
    </div>
    <AppFooter class="mt-auto" />
  </div>
</template>

<style></style>
