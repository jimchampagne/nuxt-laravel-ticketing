<script setup lang="ts">
definePageMeta({
  layout: 'default',
  middleware: ['sanctum:auth'],
})

const { data: Projects } = await useApiFetch<Project[]>('/projects')
</script>

<template>
  <div class="p-8 text-primary">
    <div v-for="project in Projects" :key="project.id" class="rounded-lg shadow-md mb-16 text-primary">
      <div class="mb-2 flex items-center gap-1 text-primary font-semibold">
        <Icon name="lucide:boxes" class="!h-[24px] !w-[24px]" />
        <h1>{{ project.title }}</h1>
      </div>
      <div class="flex gap-4 max-w-[calc(100vw-235px)] overflow-x-scroll overflow-hidden rounded-xl py-4">
        <div v-for="board in project.boards" :key="board.id"
          class="min-w-md p-6 rounded-xl bg-dark border border-solid border-primary">
          <h2 class="mb-4 text-primary w-full font-semibold">{{ board.title }}</h2>
          <div class="flex flex-col gap-2 overflow-y-scroll min-h-[520px] h-[520px]">
            <div v-for="ticket in board.tickets" :key="ticket.id">
              <div
                class="rounded-md p-4 bg-dark text-primary shadow-xl border border-solid border-primary hover:text-dark hover:bg-primary ease-in-out duration-150 cursor-pointer">
                <div class="flex items-start justify-between mb-2 gap-4">
                  <p class="font-semibold">{{ ticket.title }}</p>
                  <Icon v-if="ticket.status === 'open'" name="lucide:git-pull-request" class="!h-[24px] !w-[24px]" />
                  <Icon v-if="ticket.status === 'in_progress'" name="lucide:circle-dashed" class="!h-[24px] !w-[24px]" />
                  <Icon v-if="ticket.status === 'closed'" name="lucide:circle-x" class="!h-[24px] !w-[24px]" />
                </div>
                <div>
                  <p>{{ ticket.description }}</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
