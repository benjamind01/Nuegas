const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'PlusJakartaSans': ['Plus Jakarta Sans', 'regular'],
                'Roboto': ['Roboto', 'regular']
            },
        },
        colors: {
            'blue-logo': '#546FFF',
            'rectangle': '#F5F5F7',
            'text-link': '#8E92BC',
            'help': '#141522',
            'white': '#FFFFFF',
            'gray': '#54577A',
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
