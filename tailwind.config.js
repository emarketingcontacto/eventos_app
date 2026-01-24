import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export const presets = [preset]
export const content = [
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.js',
]
export const theme = {
    extend: {
        colors: {
            'brand-blue': '#1e40af',
            'brand-yellow': '#facc15',
            'brand-light-blue': '#3b82f6',
            'brand-dark': '#0f172a'
        },
        borderRadius: {
            'mega': '2.5rem',
        },
        fontFamily: {
            sans: ['Outfit', 'sans-serif'],
        },
    },
}
export const plugins = []
