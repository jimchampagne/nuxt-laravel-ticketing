<script setup lang="ts">
import { Icon } from '#components';
import { FetchError } from 'ofetch';

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
        await login({ email: email.value, password: password.value});
    } catch (e: any) {
        error.value = e.response?._data.message || 'Login failed'
        loading.value = false
    }
}
</script>

<template>
  <div class="p-12 bg-magnolia rounded-[5px] flex flex-col items-center max-w-[320px] text-raisin">
    <Icon name="lucide:ticket-check" class="!w-[40px] !h-[40px] mb-1 text-indigo fill-current" />
    <h1 class="text-center font-title mb-1 font-bold">NuxtTicket</h1>
    <h2 class="text-center font-title mb-8">Sign in to your account</h2>
    <form class="w-full mb-4" @submit.prevent="authenticate">
      <div class="form-group mb-4">
        <input type="email" v-model="email" id="email" placeholder="E-mail" required />
      </div>
      <div class="form-group mb-8">
        <input type="password" placeholder="Password" v-model="password" id="password" required />
      </div>
      <button class="w-full" type="submit" :disabled="loading">
        <p v-if="!loading">Login</p>
        <AppLoadingSpinner v-if="loading" is-small />
      </button>
    </form>
    <div v-if="error" class="error-message">{{ error }}</div>
    <div class="text-[14px]">
      No account? 
      <NuxtLink to="/register">Register here</NuxtLink>
    </div>
  </div>
</template>

<style scoped>

</style>