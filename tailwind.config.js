module.exports = {
  mode: process.env.NODE_ENV && "jit",
  purge: [
    './resources/js/Pages/**/*.vue',
    './resources/views/**/*.blade.php'
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
