<?php

// sets the theme
if (!function_exists('current_theme')) {
    function current_theme($default = null) {
        // Si se pasa un valor explícito, usarlo (para sobreescrituras)
        if (!is_null($default)) {
            return $default;
        }
        
        // Obtener del .env con valor por defecto
        //return env('THEME_CURRENT', 'classic');
        return env('THEME_CURRENT');
    }
}