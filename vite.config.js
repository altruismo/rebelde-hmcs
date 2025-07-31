import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
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

const theme = getEnvValue('THEME_CURRENT');

const cssInputs = [
  `resources/themes/${theme}/css/client-area/app.css`,
  `resources/themes/${theme}/css/guest-area/app.css`,
];

const jsInputs = [
  `resources/themes/${theme}/js/client-area/app.js`,
  `resources/themes/${theme}/js/guest-area/app.js`,
];

// Función para extraer el área: admin-area, guest-area, etc.
function extractArea(filePath) {
  const match = filePath.match(/\/(admin-area|client-area|guest-area)\//);
  return match ? match[1] : 'common';
}

export default defineConfig({
  plugins: [
    laravel({
      input: [...cssInputs, ...jsInputs],
      refresh: true,
    }),
  ],
  build: {
    rollupOptions: {
      output: {
        entryFileNames: (chunkInfo) => {
          const area = extractArea(chunkInfo.facadeModuleId || '');
          return `assets/${theme}/${area}-[hash].js`;
        },
        assetFileNames: (assetInfo) => {
          const area = extractArea(assetInfo.name || '');
          const ext = path.extname(assetInfo.name || '');
          return `assets/${theme}/${area}-[hash][extname]`;
        },
      },
    },
  },
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    hmr: {
      host: 'clientes.focused.cl.local',
    },
    allowedHosts: ['clientes.focused.cl.local'],
  },
});
