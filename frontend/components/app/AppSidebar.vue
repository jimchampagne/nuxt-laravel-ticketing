<script setup lang="ts">

</script>

<template>
  <div class="min-w-[180px] border-r-[2px] border-solid border-secondary/20 px-1">
    <div class="mb-[24px] h-14 flex items-center">
      <NuxtLink :to="'/dashboard'" class="flex items-center justify-center gap-2 py-2 px-4">
        <Icon name="lucide:ticket-check" class="!w-[30px] !h-[30px] text-primary fill-current" />
        <p class="text-white text-[18px]">NuxtTicket</p>
      </NuxtLink>
    </div>
    <div class="flex flex-col gap-1">
      <AppSidebarLink
        to="/dashboard"
        text="Dashboard"
      />
      <AppSidebarLink
        to="/dashboard/projects"
        text="Projects"
      />
      <AppSidebarLink
        to="/dashboard/boards"
        text="Boards"
      />
      <AppSidebarLink
        to="/dashboard/tickets"
        text="Tickets"
      />
    </div>
  </div>
</template>

<style scoped>

</style>
