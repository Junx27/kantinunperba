/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                myShadow1: "10px 20px 0 0 white",
                myShadow2: "-10px 20px 0 0 white",
            },
        },
    },
    plugins: [],
};
