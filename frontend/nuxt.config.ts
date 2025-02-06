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
  runtimeConfig: {
    public: {
      apiBase: 'http://127.0.0.1:8000/api'
    }
  },
  modules: [
    '@nuxt/icon',
  ],
  css: ['~/assets/css/app.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ]
  }
})
