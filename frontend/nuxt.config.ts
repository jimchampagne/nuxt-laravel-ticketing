// https://nuxt.com/docs/api/configuration/nuxt-config
import tailwindcss from "@tailwindcss/vite"

export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',
  ssr: false,
  devtools: { 
    enabled: true,
    vscode: {
      enabled: true,
    },
    componentInspector: true,
    timeline: {
      enabled: true,
    }
  },
  nitro: {
    compressPublicAssets: {
      brotli: true,
    }
  },
  imports: {
    dirs: [
      'composables/**',
    ]
  },
  app: {
    head: {
      title: 'Nuxt Laravel Todo',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', content: '' },
      ],
      link: [
        { rel: 'icon', type: 'image/ico', href: '/favicon.ico' },
      ],
    },
  },
  modules: [
    '@nuxt/icon',
    'nuxt-auth-sanctum'
  ],
  sanctum: {
    baseUrl: 'http://localhost:8000',
    mode: 'token',
    endpoints: {
      'csrf': '/sanctum/csrf-cookie',
      'login': '/api/login',
      'logout': '/api/logout',
      'user': '/api/user',
    },
    redirect: {
      onLogin: '/dashboard',
      onLogout: '/login',
    }
  },
  runtimeConfig: {
    public: {
      apiBase: 'http://localhost:8000/api'
    }
  },
  css: ['~/assets/css/app.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ]
  }
})
