/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php',
    './public/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        'Grey-Custom'   : '#686D76',
        'Black-Custom'  : '#373A40',
        'Orange-Custom' : '#DC5F00',
        'White-Custom'  : '#EEEEEE'
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('daisyui'),
  ],
}

