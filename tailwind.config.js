import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
                milkChoco: "#885B43",
                dykeBrown: "#6A4430",
                deer: "#C48665",
                tan: "#D4AF88",
                wheat: "#F4DCB3",
                wheelGreen: "#35A123",
                vividTangelo: "#EC7926",
                mustard: "#FFD150",
            },
        },
    },

    plugins: [forms, typography],
};
