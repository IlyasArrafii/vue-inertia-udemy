<template>
  <MainLayout>
    <ListingAddress :listing="listing" />
  </MainLayout>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import MainLayout from '@/Layouts/MainLayout.vue'

defineProps({
  listing: Object,
})
</script>
