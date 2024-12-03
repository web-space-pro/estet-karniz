const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: {
    mode: 'layers',
    content: [
      'function.php',
      'header.php',
      '404.php',
      'footer.php',
      'page.php',
      'template-parts/content-produktsiya.php',
      'template-parts/content-search.php',
      'template-parts/content-none.php',
      'search.php',
      'partails/tpl-contact.php',
      'partails/tpl-filterSlider.php',
      'partails/tpl-info.php',
      'partails/tpl-slider.php',
      'partails/tpl-steps.php',
      'partails/tpl-weWork.php',
      'partails/tpl-Products.php',
      'partails/tpl-welcome.php',
      'partails/tpl-simpleContent.php',
      'partails/tpl-textBlock.php',
      'partails/tpl-methodsUse.php',
      'partails/tpl-tabSlider.php',

        //product
      'tpl-product/cpt-categories_info.php',
      'tpl-product/cpt-hero.php',
      'tpl-product/cpt-methods_of_application.php',
      'tpl-product/cpt-tabs_content.php',
      'single-produktsiya.php',
    ],
  },
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          'xs': '640px',
          'sm': '768px',
          'md': '992px',
          'lg': '1024px',
          'xl': '1180px',
          '2xl': '1180px',
        }
      },
      screens: {
        'xs': '640px',
        'sm': '768px',
        'md': '992px',
        'lg': '1024px',
        'xl': '1180px',
        '2xl': '1440px',
      },
      colors: {
        white: {
          100: '#252328',
          200: '#D9D9D9',
          300: '#dfdfdf',
          900: '#ffffff'
        },
        black: {
          700: '#1f1b20',
          800: '#252328',
          900: '#000000'
        },
        blue:{
          100: '#0ECFD2',
          200: '#00818B',
        }
      },
      boxShadow: {
        'lg': '0 4px 15px 0 rgba(49, 196, 190, 0.75)',
        'card': '0 4px 15px 0 rgba(223, 223, 223, 0.75)',
      },
      backgroundImage: {
        'bg-gradient': "linear-gradient(90deg, #0ecfd2 0%, #076a6c 100%)",
        'bg-link': 'linear-gradient(90deg, #0ecccf 0%, #086b6d 100%)',
      }
    },
  },
  variants: {
    variants: {
      extend: {
        visible: [ 'group-hover', 'hover'],
        invisible: ['group-hover', 'hover'],
      },
    },
  },
  plugins: [],
}
