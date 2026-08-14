export default defineNuxtConfig({
  modules: [
    '@nuxt/eslint',
    '@nuxt/ui',
    '@nuxt/icon'
  ],

  icon: {
    provider: 'none',
    clientBundle: {
      scan: true
    }
  },

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

  eslint: {
    config: {
      stylistic: {
        indent: 2,
        commaDangle: 'never',
        braceStyle: '1tbs'
      }
    }
  }
})
