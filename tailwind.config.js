/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.{html,js}", "./src/**/*.{css}"],
    theme: {
      extend: {
          fontFamily: {
              sans: ['Cairo', 'sans-serif'],
          }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }