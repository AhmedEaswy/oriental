module.exports = {
  content: [
    "./resources/views/frontend/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Cairo', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],}
