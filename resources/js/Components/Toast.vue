<template>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import { toast } from 'vue3-toastify'
import 'vue3-toastify/dist/index.css'

/**
 * Array variable to store setting options for toastify.
 * we will use few but there are dozens of options that you can
 * @var array
 */
const options = {
  'position': toast.POSITION.TOP_RIGHT,
  'autoClose': 3000,
  'closeOnClick': true,
  'type': 'default',
}

const props = defineProps({
  type: String,
  message: String,
})

/**
 * Laravel flash message object
 * @var object
 */
const flash = usePage().props.flash

/**
 * main function to trigger toast notification
 * @param string type
 * @param string message
 */
const notify = (type, message) => {
  options['type'] = type
  toast(message, options)
}

/**
 * Trigger toast notification if success message
 */
if(flash.success){
  notify('success', flash.success)
}

/**
 * Trigger toast notification if success message
 */
if(flash.error){
  notify('error', flash.error)
}

/**
 * Trigger toast notification if success message
 */
if(flash.info){
  notify('info', flash.info)
}

/**
 * Trigger toast notification if success message
 */
if(flash.warning){
  notify('warning', flash.warning)
}

if(props.message){
  notify(props.type, props.message)
}
</script>
