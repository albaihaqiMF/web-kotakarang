const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors:{
            blue:colors.sky,
            white:colors.white,
            red:colors.red,
            green:colors.lime,
            yellow:colors.yellow,
            gray:colors.blueGray,
            cyan:colors.cyan,
            purple:colors.purple,
            indigo:colors.indigo,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            textOpacity: ['active'],
            opacity: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
