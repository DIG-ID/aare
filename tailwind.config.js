/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './front-page.php',
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
      poppins: ['Poppins', 'sans-serif'],
      miller: [ 'miller-headline', 'serif']
    },

    extend: {
      letterSpacing: {
        //wide: '.038em',
        //wider: '.06em',
      },
      colors: {
        'blue-shade-5': '#0E324A',
        'blue-shade-4': '#1D4763',
        'blue-shade-3': '#3E6C8A',
        'blue-shade-2': '#D2E9F7',
        'blue-shade-1': '#F2FAFF'
      },
      transitionTimingFunction: {
        //'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      }
    },
  },
  plugins: [
  ],
}
