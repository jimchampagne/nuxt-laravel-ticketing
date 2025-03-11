<script setup lang="ts">
const props = defineProps<{
  tickets: Ticket[] | null
}>()
</script>

<template v-if="tickets">
  <div v-for="ticket in props.tickets" :key="ticket.id">
    <div
      class="rounded-md p-4 bg-dark shadow-xl border border-solid border-primary hover:text-dark hover:bg-primary ease-in-out duration-150 cursor-pointer"
    >
      <div class="flex items-start justify-between mb-2 gap-4">
        <p class="font-semibold">
          {{ ticket.title }}
        </p>
        <Icon v-if="ticket.status === 'open'" name="lucide:git-pull-request" class="!h-[24px] !w-[24px]" />
        <Icon v-if="ticket.status === 'in_progress'" name="lucide:circle-dashed" class="!h-[24px] !w-[24px]" />
        <Icon v-if="ticket.status === 'closed'" name="lucide:circle-x" class="!h-[24px] !w-[24px]" />
      </div>
      <div>
        <p class="text-white">
          {{ ticket.description }}
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
