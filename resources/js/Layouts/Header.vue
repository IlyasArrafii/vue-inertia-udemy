<template>
  <div class="relative flex h-screen">
    <!--sidebar-->
    <div class="bg-white w-64 px-2">
      <a href="" class="flex items-center mx-auto"><CubeTransparentIcon class="w-10 h-20 text-black" /><span>Vue Inertia</span></a>
    </div>
    <!--maincontent-->
    <div class="flex-1">
      <div class="bg-white shadow px-2 py-5">Header</div>
      <div class="p-8 text-cyan-200 font-medium">Content</div>
    </div>
  </div>
</template>

<script setup>
import { CubeTransparentIcon, HomeIcon, ChevronUpIcon } from '@heroicons/vue/24/outline'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import Sidebar from './SideBar.vue'
</script>
