/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php', // Caminho principal para suas views
        './resources/js/**/*.js',           // Se usar classes em JS
        './app/Http/Livewire/**/*.php',     // Para componentes Livewire mais antigos
        './app/Livewire/**/*.php',          // Para componentes Livewire mais recentes
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
            },
        },
    },

    plugins: [],
};