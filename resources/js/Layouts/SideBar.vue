<script setup>
import {CubeTransparentIcon, HomeIcon, NewspaperIcon, PhotoIcon, UserPlusIcon} from '@heroicons/vue/24/outline'
import SideBarItem from './SideBarItem.vue'
const navItems = [
  {href: '#', label: 'Dashboard', children: [], icon: HomeIcon},
  {href: '#', label: 'User', children: [
    {href: '#', label: 'All User', children: [], icon: UserPlusIcon},
    {href: '#', label: 'User Permission', children: [], icon: null},
  ], icon: NewspaperIcon},
  {href: '#', label: 'Listing', children: [
    {href: '#', label: 'All Listing', children: [], icon: DataView},
    {href: '#', label: 'Create Listing', children: [
      {href: '#', label: 'Third Level', children: [], icon: null},
    ], icon: null},
  ], icon: PhotoIcon},
]
</script>
<template>
  <div class="flex min-h-screen">
    <div class="w-64 shrink-0 bg-slate-50 border-r border-slate-200 py-4">
      <div class="px-4">
        <a href="" class="flex items-center mx-auto"><CubeTransparentIcon class="w-10 h-20 text-black" /><span>Vue Inertia</span></a>
      </div>
      <nav>
        <SideBarItem v-for="(item, i) in navItems" :key="i" :item="item" />
      </nav>
    </div>
    <main class="p-4">Content</main>
  </div>
</template>
