<template>
  <!--<Header />-->
  <SideBar />

  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import Header from './Header.vue'
import SideBar from './SideBar.vue'

</script>
