import { defineConfig } from 'vite'
import laravel from '@vitejs/plugin-laravel'
import tailwindcss from 'vite-plugin-tailwind'

export default defineConfig({
    plugins: [tailwindcss(), laravel(['resources/css/app.css', 'resources/js/app.js'])]
})
