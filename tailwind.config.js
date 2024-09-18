/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        green: '#81DD77', // triad farba
        blue: '#91DDEE', // review farba
        black: '#1A1A1A', // text a pozadie
        cream: '#F2F0E4', // text a pozadie
      },
      fontSize: {
        'title-large': ['110px', { lineHeight: '0.83' }],  // veľký nadpis (110px)
        'title-medium': ['60px', { lineHeight: '1.3' }],  // stredný nadpis (60px)
        'title-small' : ['38px', { lineHeight:'1.3' }],   // najmenší nadpis (38px)
        'text-small': ['16px', { lineHeight: '1.6' }],    // menší text (16px)
        'text-large': ['20px', { lineHeight: '1.6' }],    // väčší text (20px)
        'button': ['16px', { lineHeight: '1.6' }],        // text pre tlačidlo (16px)
      },
      boxShadow: {
        'triad' : ['box-shadow: 1px 1px 10px 3px #81dd7726']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}