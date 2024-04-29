/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        screens: {
            'xs': '375px',
            // => @media (min-width: 320px) { ... }

            'sm': '425px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
          },
        colors: {
            'primaryColorBlue': '#09537C',
            'whiteTheme': '#ffffff',
            'lightGray': '#F8F8F8',
            'darkGrey': "#EDEDED",
            'black': "#1E1E1E",
            'hover': "rgba(28, 164, 153, 0.15)",
            'borderColor': "#E7E9EB",
        },
        fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
        },
        borderRadius: {
            'none': '0',
            'sm': '5px',
            DEFAULT: '10px',
            'full': '9999px',
        },
        boxShadow: {
            'shadow': '2px 2px 10px rgba(9, 55, 52, 0.1)',
        },

        boxShadow: {
            DEFAULT: '2px 2px 10px rgba(9, 55, 52, 0.1)',
            none: 'none',
        },
        fontWeight: {
            medium: '400',
            Weight5: '500',
            semibold: '600',
        },
    },
}

