<?php

namespace App\Providers;

use App\Models\Negocio;
use App\Models\Zona;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        //Datos del negocio en todas las vistas
        ViewFacade::composer([
            'welcome',
            'components.*',
            'partials.*',
            'pages.*'], function($view){
            //get negocio data
                $view->with('negocio', Negocio::first());
            //get Zonas data
                $view->with('zonas', Zona::pluck('zona_nombre'));
        });
    }
}
