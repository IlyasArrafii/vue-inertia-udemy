/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: ['./storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue'],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins'],
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@headlessui/vue')],
}

