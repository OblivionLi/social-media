const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                redPantone: '#E63946',
                honeydrew: '#F1FAEE',
                nonPhotoBlue: '#A8DADC',
                cerulean: '#457B9D',
                berkeleyBlue: '#1D3557',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
