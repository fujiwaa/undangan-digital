/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            fontFamily: {
                lus: ["Lusitana"],
            },
            backgroundImage: {
                "hero-login": "url('/dist/img/bg-login.png')",
            },
            colors: {
                pink: "#ec4899",
                dark: "#0f172a",
                hero: "#fbcfe8",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
