const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      gray: colors.trueGray,
      white: colors.white,
      black: colors.black,
      tailwindblue: colors.blue,
      blue: '#3292ff',
    },
    fontFamily: {
      'sans': 'Roboto',
    },
    extend: {
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
