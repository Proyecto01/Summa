<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    

    /**
     * @var array
     */

    private $bindings = [
        

        # Apis implementations
       // \Acme\ApisInterfaces\EmpleadoApi::class                => \Acme\Services\EmpleadoService::class,
        
        # Repositories implementations
       // \Acme\Repository\EmpleadoInterface::class => \Acme\Repository\Eloquent\Empleado::class,

    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->bindings as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }
}
