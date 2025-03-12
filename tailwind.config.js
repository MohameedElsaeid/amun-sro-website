// tailwind.config.js
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                gold: {
                    light: '#f5d77f',
                    DEFAULT: '#d4af37',
                    dark: '#a77e0c',
                },
                sand: {
                    light: '#f8f0e3',
                    DEFAULT: '#e6d2b5',
                    dark: '#c4b092',
                },
                midnight: {
                    light: '#303952',
                    DEFAULT: '#1e272e',
                    dark: '#0a0f14',
                }
            },
            fontFamily: {
                'cinzel': ['Cinzel', 'serif'],
                'body': ['Roboto', 'sans-serif'],
            },
            backgroundImage: {
                'hero-pattern': "url('/lovable-uploads/3b729535-d36b-49f8-bdcc-e9679626c1e2.png')",
                'logo': "url('/lovable-uploads/34a87cac-fe82-4900-b479-a9dc520012b8.png')",
            }
        }
    },
    plugins: [],
}
