<script setup lang="ts">
const props = defineProps({
  isBig: { type: Boolean, default: false },
  isNeutral: { type: Boolean, default: false },
  isSmall: { type: Boolean, default: false },
})

const sizeClasses = computed(() => {
  if (props.isBig)
    return 'w-[4rem] h-[4rem] border-[4px]'
  if (props.isSmall)
    return 'w-[1rem] h-[1rem] border-[2px]'
  return 'w-[2rem] h-[2rem] border-[3px]'
})
</script>

<template>
  <div>
    <div
      :class="[sizeClasses]"
      class="spinner inline-block border-white border-t-primary rounded-full border-solid"
    />
  </div>
</template>

<style scoped>
.spinner {
  animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}
</style>
