<script setup lang="ts">
const props = defineProps<{
  boards: Board[] | null
}>()
</script>

<template v-if="boards">
  <div
    v-for="board in props.boards" :key="board.id"
    class="min-w-md p-6 rounded-xl border-[2px] border-grey border-solid hover:border-primary transition
    duration-250 bg-linear-to-b from-grad-grey-1/50 to-grad-grey-2/50"
  >
    <h2 class="mb-4 text-primary w-full font-semibold">
      {{ board.title }}
    </h2>
    <div class="flex flex-col gap-2 overflow-y-scroll min-h-[520px] h-[520px]">
      <DashboardProjectBoardTicket :tickets="board.tickets" />
    </div>
  </div>
</template>

<style scoped>

</style>
