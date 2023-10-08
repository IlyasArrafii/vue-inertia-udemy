<template>
  <MainLayout>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
    <div>The message is {{ message }}</div>
  </MainLayout>

  <Head title="welcome" />
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
defineProps({
  message: String,
})
</script>

<script>
import MainLayout from '@/Layouts/MainLayout.vue'
</script>
