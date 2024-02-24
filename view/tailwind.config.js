/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    
    extend: {
        fontFamily: {
          jakarta: ['Plus Jakarta Sans', 'Helvetica', 'Arial', 'sans-serif'],
        },
        colors: {
          'biru': '#7B94A9',
          'cokelat': '#5B3636',
          'Haij':'#57A543',
          'sebelasperseratus':'#1ad6c6',
        },
    },
  },
  plugins: [
    function ({addUtilities}) {
      const newUtilities = {
        ".no-scrollbar::-webkit-scrollbar":{
          display : "none",
        },
        "no-scrollbar": {
          "ms-overflow-style:":"none",
          "scrollbar-width":"none",
        }
      }
      addUtilities(newUtilities);
    }
  ],
}

