<template>
  <span>
    {{ listing.city }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }}
  </span>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>
