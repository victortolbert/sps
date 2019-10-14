module.exports = {
  theme: {
    extend: {}
  },
  variants: {
    borderColor: ['responsive', 'group-hover', 'hover', 'focus', 'focus-within'],
    backgroundColor: ['responsive', 'group-hover', 'hover', 'focus', 'active'],
    opacity: [ 'responsive', 'group-hover', 'hover', 'focus' ],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('tailwindcss-responsive-embed')(),
    require('tailwindcss-elevation')(['responsive']),
    require('tailwindcss-aspect-ratio')({
      ratios: {
        'square': [1, 1],
        '16/9': [16, 9],
        '4/3': [4, 3],
        '21/9': [21, 9],
      },
      variants: ['responsive', 'hover'],
    }),
    require('tailwindcss-scrims')({
      directions: {
        't': 'to bottom',
        'b': 'to top',
        'r': 'to left',
        'l': 'to right',
      },
      distances: {
        '1/4': '25%',
        '1/3': '33.33333%',
        '1/2': '50%',
        '2/3': '66.66666%',
        '3/4': '75%',
      },
      colors: {
        default: ['rgba(0, 0, 0, 0.4)', 'rgba(0, 0, 0, 0)'],
      },
      variants: ['responsive', 'hover'],
    }),
  ]
}
