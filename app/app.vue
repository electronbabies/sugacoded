<script setup lang="ts">
const title = 'SugaCoded'
const description = 'Thoughtful software built for real-world problems.'
const siteUrl = 'https://sugacoded.app'
const socialImage = `${siteUrl}/og-image.png`

useHead({
  htmlAttrs: {
    lang: 'en'
  },

  link: [
    {
      rel: 'icon',
      href: '/favicon.ico'
    },
    {
      rel: 'canonical',
      href: siteUrl
    }
  ]
})

useSeoMeta({
  title,
  description,

  ogType: 'website',
  ogTitle: title,
  ogDescription: description,
  ogUrl: siteUrl,
  ogImage: socialImage,

  twitterCard: 'summary_large_image',
  twitterTitle: title,
  twitterDescription: description,
  twitterImage: socialImage
})
</script>

<template>
  <UApp>
    <NuxtLayout>
      <NuxtPage />
    </NuxtLayout>
  </UApp>
</template>
