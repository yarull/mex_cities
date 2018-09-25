<?php

namespace Yarull\Mex_cities;

use Illuminate\Support\ServiceProvider;

class MexCitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      include __DIR__.'/routes.php';
      $this->publishes([
        __DIR__.'/migrations' => $this->app->databasePath().'/migrations'
      ], 'migrations');
      
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
      $this->app->make('Yarull\Mex_cities\EstadosController');
    }
}
