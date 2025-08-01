import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import { readFileSync } from 'fs';

// Leer el nombre del tema activo desde bootstrap/cache/theme.json
function getCurrentTheme(defaultTheme = 'default') {
  try {
    const json = readFileSync('bootstrap/cache/theme.json', 'utf8');
    const data = JSON.parse(json);
    console.log("Tema data: ", data);
    return typeof data.theme === 'string' ? data.theme : defaultTheme;    
  } catch {
    return defaultTheme;
  }
}

const theme = getCurrentTheme();
console.log("Tema cargado: "+theme);
const cssInputs = [
  `resources/themes/${theme}/css/client-area/app.css`,
  `resources/themes/${theme}/css/guest-area/app.css`,
];

const jsInputs = [
  `resources/themes/${theme}/js/client-area/app.js`,
  `resources/themes/${theme}/js/guest-area/app.js`,
];

const AREAS = ['admin-area', 'client-area', 'guest-area'];

// Función para extraer el área: admin-area, guest-area, etc.
function extractArea(filePath) {
  const area = AREAS.find(a => filePath.includes(`/${a}/`));
  return area || 'common';
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
          const name = path.basename(chunkInfo.name || 'app', '.js');
          return `assets/${theme}/${area}-${name}-[hash].js`;
        },
        assetFileNames: (assetInfo) => {   
          const name = assetInfo.name || assetInfo.fileName || 'asset';       
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
