#!/bin/bash

ENV_FILE=".env"
MODE=$1
VITE_PORT=5173
BASE_URL="clientes.focused.cl.local"

if [[ "$MODE" != "dev" && "$MODE" != "prod" ]]; then
  echo "Uso: ./toggle-env.sh [dev|prod]"
  exit 1
fi

if [[ ! -f "$ENV_FILE" ]]; then
  echo "No se encontró el archivo $ENV_FILE"
  exit 1
fi

# Matar proceso Vite si está corriendo
pkill -f vite

# Matar proceso que esté ocupando el puerto VITE_PORT
PID=$(lsof -ti tcp:$VITE_PORT)
if [[ -n "$PID" ]]; then
  echo "⚠️  Puerto $VITE_PORT en uso. Matando proceso PID $PID..."
  kill -9 $PID
fi

if [[ "$MODE" == "dev" ]]; then
  echo "🔄 Cambiando a modo DESARROLLO..."

  sed -i \
  -e "s/^APP_ENV=.*/APP_ENV=local/" \
  -e "s/^APP_DEBUG=.*/APP_DEBUG=true/" \
  -e "s/^#\?ASSET_URL=.*/ASSET_URL=http:\/\/$BASE_URL:$VITE_PORT/" \
  "$ENV_FILE"

  echo "✅ Variables de entorno actualizadas:"
  echo "   - APP_ENV=local"
  echo "   - APP_DEBUG=true"
  echo "   - ASSET_URL=http://$BASE_URL:$VITE_PORT"

  php artisan config:clear
  php artisan cache:clear

  echo "🚀 Iniciando Vite Dev Server..."
  npm run dev

else
  echo "🔄 Cambiando a modo PRODUCCIÓN..."

  sed -i \
  -e "s/^APP_ENV=.*/APP_ENV=production/" \
  -e "s/^APP_DEBUG=.*/APP_DEBUG=false/" \
  -e "s/^ASSET_URL=.*/#ASSET_URL=http:\/\/$BASE_URL:$VITE_PORT/" \
  "$ENV_FILE"

  echo "✅ Variables de entorno actualizadas:"
  echo "   - APP_ENV=production"
  echo "   - APP_DEBUG=false"
  echo "   - ASSET_URL comentado"

  echo "🧹 Eliminando archivo public/hot si existe..."
  if [[ -f public/hot ]]; then
    rm public/hot
    echo "✅ Archivo public/hot eliminado."
  fi

  echo "🧼 Limpiando cachés de Laravel..."
  php artisan config:clear
  php artisan cache:clear
  php artisan route:cache
  php artisan view:cache

  echo "⚙️ Compilando assets de producción..."
  npm run build
fi

echo "🎉 Cambio completado: ahora estás en modo $MODE"
