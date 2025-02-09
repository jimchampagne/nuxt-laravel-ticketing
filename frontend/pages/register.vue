<script setup lang="ts">
import { Icon } from '#components'

definePageMeta({
  layout: 'auth',
})

const { login } = useSanctumAuth()

const loading = ref<boolean>(false)
const name = ref<string>('')
const email = ref<string>('')
const password = ref<string>('')
const confirmPassword = ref<string>('')
const error = ref<string>('')

async function registerUser() {
  loading.value = true
  try {
    error.value = ''
    await useApiOFetch('/register', {
      method: 'POST',
      body: JSON.stringify({
        name: name.value,
        email: email.value,
        password: password.value,
        password_confirmation: confirmPassword.value,
      }),
    })

    await login({ email: email.value, password: password.value })
  }
  catch (e: any) {
    error.value = e.response?._data.message || 'Registration failed'
    loading.value = false
  }
}
</script>

<template>
  <div class="p-12 bg-white rounded-[5px] flex flex-col items-center max-w-[320px] text-dark">
    <Icon name="lucide:notebook-pen" class="!w-[40px] !h-[40px] mb-[1rem] text-secondary fill-current" />
    <h1 class="text-center font-title mb-1 font-bold">
      NuxtTicket
    </h1>
    <h2 class="text-center font-title mb-8">
      Create your account
    </h2>
    <form class="w-full mb-4" @submit.prevent="registerUser">
      <div class="form-group mb-4">
        <input id="name" v-model="name" type="text" placeholder="Name" required>
      </div>
      <div class="form-group mb-4">
        <input id="email" v-model="email" type="email" placeholder="E-mail" required>
      </div>
      <div class="form-group mb-4">
        <input id="password" v-model="password" type="password" placeholder="Password" required>
      </div>
      <div class="form-group mb-8">
        <input id="confirmPassword" v-model="confirmPassword" type="password" placeholder="Confirm Password" required>
      </div>
      <button class="w-full" type="submit" :disabled="loading">
        <p v-if="!loading">
          Register
        </p>
        <AppLoadingSpinner v-if="loading" is-small />
      </button>
    </form>
    <div v-if="error" class="error-message">
      {{ error }}
    </div>
    <div class="mt-4 text-[12px]">
      Already have an account? <NuxtLink to="/">
        Login here
      </NuxtLink>
    </div>
  </div>
</template>

<style scoped>
/* Your custom styles go here */
</style>
