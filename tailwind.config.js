module.exports = {
  mode: 'jit',
  purge: [
    './resources/admin/**/*.vue',
    './resources/admin/**/*.blade.php',
    './resources/js/Pages/**/*.vue',
    './resources/views/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
