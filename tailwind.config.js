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
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        extend: {},
    },

    plugins: [forms, typography, require("preline/plugin")],
};
