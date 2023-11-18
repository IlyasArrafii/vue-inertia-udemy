<template>
  <div>
    <Disclosure>
      <Link :href="route('listing.create')">
        <DisclosureButton
          class="flex w-full items-center rounded-lg bg-slate-100 px-4 py-2.5 text-left text-sm font-medium text-slate-900 hover:bg-slate-200 focus:outline-none focus-visible:ring focus-visible:ring-slate-500/75"
        >
          <div class="flex pr-2">
            <HomeIcon class="w-5 h-5 text-slate-700" />
          </div>
          <div class="w-full">
            <span class="font-medium font-poppins">Dashboard</span>
          </div>
        </DisclosureButton>
      </Link>
    </Disclosure>
    <Disclosure v-slot="{ open }" as="div" class="py-4">
      <p class="pb-1 font-poppins text-sm">User Management</p>
      <DisclosureButton
        class="flex w-full items-center rounded-lg bg-slate-100 px-4 py-2.5 text-left text-sm font-medium text-slate-900 hover:bg-slate-200 focus:outline-none focus-visible:ring focus-visible:ring-slate-500/75"
      >
        <div class="pr-2">
          <HomeIcon class="w-5 h-5 text-slate-700" />
        </div>
        <div class="flex justify-between w-full">
          <span class="font-medium font-poppins">User</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : ''"
            class="h-5 w-5 text-slate-600"
          />
        </div>
      </DisclosureButton>
      <DisclosurePanel class="px-4 pt-2 pb-2 text-sm text-gray-500">
        Test
        <DisclosureButton />
      </DisclosurePanel>
    </Disclosure>
  </div>
</template>

<script setup>
import { HomeIcon, ChevronUpIcon } from '@heroicons/vue/24/outline'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Link } from '@inertiajs/vue3'
const asideMenu = [
  {
    pages:[
      {
        title: 'Dashboard',
        link: route('listing.create'),
      },
    ],
  },
  {
    heading: 'User Management',
    pages: [
      {
        sectionTitle: 'Create User Admin',
        link: 'test',
        submenu:  [
          {
            title: 'Edit Profile',
            link: 'profile',
          },
        ],
      },
    ],
  },
]
</script>
