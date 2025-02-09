<script lang="ts" setup>
</script>

<template>
  <div class="relative min-h-screen min-w-screen flex flex-col overflow-hidden">
    <div class="flex flex-1 w-full h-full">
      <AppSidebar />
      <div class="w-full flex flex-col">
        <AppHeader />
        <!-- Content -->
        <slot />
      </div>
    </div>
    <AppFooter class="mt-auto" />
  </div>
</template>

<style></style>
