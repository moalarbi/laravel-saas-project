/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                'saas-bg-start': '#040808',
                'saas-bg-mid': '#050A0A',
                'saas-bg-end': '#071A19',
                'saas-glow': '#35E6D2',
                'saas-text-primary': 'rgba(235,255,252,0.92)',
                'saas-text-secondary': 'rgba(235,255,252,0.68)',
                'saas-glass': 'rgba(255,255,255,0.06)',
                'saas-border': 'rgba(53,230,210,0.18)',
            },
            fontFamily: {
                'arabic': ['IBM Plex Sans Arabic', 'sans-serif'],
            },
            backgroundImage: {
                'saas-gradient': 'linear-gradient(180deg, #040808, #050A0A, #071A19)',
            },
        },
    },
    plugins: [],
}
