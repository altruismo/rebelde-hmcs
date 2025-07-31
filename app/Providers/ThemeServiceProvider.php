<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $theme = config('view.theme');

        $themePath = resource_path("themes/{$theme}/views");

        $this->loadViewsFrom($themePath, 'theme');

        Blade::componentNamespace("App\\View\\Components", 'theme'); // si usas clases
        Blade::anonymousComponentPath("{$themePath}/components", 'theme'); // registra los componentes con un prefijo personalizado
        //Blade::anonymousComponentPath("{$themePath}/components");

        // Opción adicional: que "theme::" sea la vista por defecto
        // View::addNamespace('view', $themePath); // si prefieres sobreescribir
    }
}
