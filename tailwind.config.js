module.exports = {
  content: [
    './resources/views/components/header.blade.php',
    './resources/views/index.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        'montserrat': ['"Montserrat"', 'sans-serif']
      },
      colors: {
        'vertisse-purple': '#3f2c7c'
      }
    },
  },
  plugins: [],
  stats: {
    children: true
  }
}
