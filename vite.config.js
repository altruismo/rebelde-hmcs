import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        })],
    server: {
        host: '0.0.0.0', // Escucha en todas las IPs
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'clientes.focused.cl.local',
        },
        allowedHosts: ['clientes.focused.cl.local'], // Aquí agregamos el dominio personalizado
    },
});
