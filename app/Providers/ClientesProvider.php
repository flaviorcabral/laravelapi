<?php

namespace App\Providers;

use App\Clientes;
use App\Observers\ClientesObservers;
use Illuminate\Support\ServiceProvider;

class ClientesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Clientes::observe(ClientesObservers::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
