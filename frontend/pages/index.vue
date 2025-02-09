<script setup lang="ts">
import { Icon } from '#components'

definePageMeta({
  layout: 'auth',
})

const loading = ref<boolean>(false)
const email = ref<string>('')
const password = ref<string>('')
const error = ref<string>('')

const { login } = useSanctumAuth()

async function authenticate() {
  loading.value = true
  try {
    error.value = ''
    await login({ email: email.value, password: password.value })
  }
  catch (e: any) {
    error.value = e.response?._data.message || 'Login failed'
    loading.value = false
  }
}
</script>

<template>
  <div class="p-12 bg-white rounded-[5px] flex flex-col items-center max-w-[320px] text-dark">
    <Icon name="lucide:ticket-check" class="!w-[40px] !h-[40px] mb-1 text-secondary fill-current" />
    <h1 class="text-center font-title mb-1 font-bold">
      NuxtTicket
    </h1>
    <h2 class="text-center font-title mb-8">
      Sign in to your account
    </h2>
    <form class="w-full mb-4" @submit.prevent="authenticate">
      <div class="form-group mb-4">
        <input id="email" v-model="email" type="email" placeholder="E-mail" required>
      </div>
      <div class="form-group mb-8">
        <input id="password" v-model="password" type="password" placeholder="Password" required>
      </div>
      <button class="w-full flex items-center justify-center" type="submit" :disabled="loading">
        <p v-if="!loading">
          Login
        </p>
        <AppLoadingSpinner v-if="loading" is-small />
      </button>
    </form>
    <div v-if="error" class="error-message">
      {{ error }}
    </div>
    <div class="text-[14px]">
      No account?
      <NuxtLink to="/register">
        Register here
      </NuxtLink>
    </div>
  </div>
</template>

<style scoped>

</style>
