import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { readFileSync } from 'fs';

// Función para leer valores del .env
function getEnvValue(key, defaultValue) {
  try {
    const env = readFileSync('.env', 'utf8');
    const match = env.match(new RegExp(`${key}=(\\w+)`));
    return match ? match[1] : defaultValue;
  } catch {    
    return defaultValue;
  }
}

//const theme = getEnvValue('THEME_CURRENT', 'classic');
const theme = getEnvValue('THEME_CURRENT');
console.log('Current Theme: '+theme);
const cssInputs = [
    `resources/themes/${theme}/admin-area/css/app.css`,
    `resources/themes/${theme}/client-area/css/app.css`,
    `resources/themes/${theme}/guest-area/css/app.css`,
];

const jsInputs = [
    `resources/themes/${theme}/admin-area/js/app.js`,
    `resources/themes/${theme}/client-area/js/app.js`,
    `resources/themes/${theme}/guest-area/js/app.js`,
];

export default defineConfig({
    plugins: [laravel({
        input: [cssInputs, jsInputs],
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
