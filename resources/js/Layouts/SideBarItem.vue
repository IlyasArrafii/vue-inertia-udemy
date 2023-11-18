<script setup>
import { Disclosure,DisclosureButton,DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/24/outline'
const props = defineProps({
  item: Object,
})
</script>


<template>
  <a v-if="!item.children.length" class="flex" href="item.href">
    <component :is="item.icon" v-if="item.icon" :class="['']" />
    <span>{{ item.label }}</span>
  </a>

  <Disclosure v-else>
    <DisclosureButton class="flex">
      <component :is="item.icon" v-if="item.icon" />
      <span>{{ item.label }}</span>
      <ChevronDownIcon />
    </DisclosureButton>
    <DisclosurePanel class="text-gray-500 ml-4">
      <SideBarItem v-for="(child, ch) in item.children" :key="ch" :item="child" />
    </DisclosurePanel>
  </Disclosure>
</template>
