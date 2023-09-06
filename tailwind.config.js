import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/* @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        // "./app/Forms/*.php",
        // "./app/Tables/*.php",
    ],

    theme: {
        fontFamily: {
            'sans': ['Outfit', 'sans-serif'],
        },
        fontWeight: {
            'regular': 300,
            'medium': 400,
            'semibold': 500,
            'bold': 600
        },
        extend: {},
    },

    plugins: [forms, typography],
};
