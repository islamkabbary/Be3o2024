/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.css",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            screens: {
                'xs': '375px',
                'sm': '425px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
              },
            colors: {
                primary: '#09537C',
                hover: "rgba(28, 164, 153, 0.15)",
            },
            borderRadius: {
                sm: '5px',
                DEFAULT: '10px',
            },
            boxShadow: {
                'shadow': '2px 2px 10px rgba(9, 55, 52, 0.1)',
            },
        },
        container: {
            center: true,
            padding: ".5rem",
        },
    },
}

