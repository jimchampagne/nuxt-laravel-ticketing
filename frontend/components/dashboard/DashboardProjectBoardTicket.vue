<script setup lang="ts">
const props = defineProps<{
  tickets: Ticket[] | null
}>()
</script>

<template v-if="tickets">
  <div v-for="ticket in props.tickets" :key="ticket.id">
    <div
      class="group/ticket rounded-md p-4 bg-grey/40 shadow-xl border border-solid border-primary text-white hover:text-dark hover:bg-primary ease-in-out duration-150 cursor-pointer"
    >
      <div class="flex items-start justify-between mb-2 gap-4">
        <p class="font-semibold text-[18px]">
          {{ ticket.title }}
        </p>
        <Icon v-if="ticket.status === 'open'" name="lucide:git-pull-request" class="!h-[24px] !w-[24px] text-primary fill-current group-hover/ticket:text-dark" />
        <Icon v-if="ticket.status === 'in_progress'" name="lucide:circle-dashed" class="!h-[24px] !w-[24px] fill-current text-yellow group-hover/ticket:text-yellow" />
        <Icon v-if="ticket.status === 'closed'" name="lucide:circle-x" class="!h-[24px] !w-[24px] fill-current text-red group-hover/ticket:text-red" />
      </div>
      <div>
        <p class="text-[14px]">
          {{ ticket.description }}
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
