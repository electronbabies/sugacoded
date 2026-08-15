import tailwindcss from '@tailwindcss/vite'

export default defineNuxtConfig({
  modules: [
    '@nuxt/eslint',
    '@nuxt/icon'
  ],

  devtools: {
    enabled: true
  },

  css: [
    '~/assets/css/main.css',
    '~/assets/scss/main.scss'
  ],

  routeRules: {
    '/': { prerender: true }
  },

  compatibilityDate: '2026-06-30',

  vite: {
    plugins: [
      tailwindcss()
    ]
  },

  eslint: {
    config: {
      stylistic: {
        indent: 2,
        commaDangle: 'never',
        braceStyle: '1tbs'
      }
    }
  },

  icon: {
    provider: 'none',
    clientBundle: {
      scan: true
    }
  }
})
