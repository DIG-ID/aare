/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      transducer: ['transducer', 'sans-serif'],
      transducerCondensed: ['transducer-condensed', 'sans-serif'],
      transducerExtended: ['transducer-extended', 'sans-serif'],
    },

    extend: {
      letterSpacing: {
        wide: '.038em',
        wider: '.06em',
      },
      colors: {
        'blue': '#14A5BB',
        'dark-blue': '#001A26',
        'light-blue': '#D0EDF1',
        'page-bg-light': '#DFF4F7',
      },
      transitionTimingFunction: {
        'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      }
    },
  },
  plugins: [
  ],
}
