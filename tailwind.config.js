import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },            
            colors: {
                // Tu paleta personalizada
                primary: '#038b8c',
                secondary: '#357146',
                danger: '#9C2F2F',
                dark: '#31210a',
            },
        },
    },

    plugins: [forms],
};
