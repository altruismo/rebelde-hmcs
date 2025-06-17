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
                // light-theme
                primary: '#0DF205',
                secondary: '#4D3719',
                danger: '#4D184D',
                deep: '#395a0d',
                shade: '#DDF2BD',
                dim: '#82BF26',
                clear: '#DDF2BD',
                milk: '#fbfff4',
                heaven: '#FAFAFA',
                
                // hacker-theme
                dark: {
                    primary: '#F1F1F1',
                    secondary: '#010101',
                    danger: '#4D184D',
                    deep: '#000000',
                    shade: '#0D0D0D',
                    dim: '#111C26',
                    clear: '#384D59',
                    milk: '#4D6873',
                    heaven: '#C1D4D9',
                },

                //blue-theme
                /* dark: {
                    primary: '#038b8c',
                    secondary: '#357146',
                    danger: '#A60311',
                    shade: '#00070D',
                    dim: '#010D26',
                    clear: '#011640',
                    milk: '#0487D9',
                    heaven: '#E5E7Eb',
                }, */

                //brown-theme
                /* dark: {
                    primary: '#038b8c',
                    secondary: '#357146',
                    danger: '#A60311',
                    shade: '#0D0000',
                    dim: '#260401',
                    clear: '#400E03',
                    milk: '#592B1B',
                    heaven: '#73412F',
                }, */

                // green-theme
                /* dark: {
                    primary: '#038b8c',
                    secondary: '#357146',
                    danger: '#A60311',
                    shade: '#040D09',
                    dim: '#11261A',
                    clear: '#1E402D',
                    milk: '#9CA6A0',
                    heaven: '#E5E7Eb',
                }, */
            },
        },
    },

    plugins: [forms],
};
