import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                jucux: {
                    300: "#50f0e0",
                    400: "#40E0D0",
                    500: "#f9e784",
                    800: "7f7f7f",
                    900: "#011627"
                }
            }
        },
    },
    plugins: [],
};
