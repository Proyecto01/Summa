<?php
namespace App\Providers;

use Acme\Repository\EmpleadoInterface;
use Acme\Repository\Eloquent\EmpleadoRepository;
use Acme\Repository\ProgramadorInterface;
use Acme\Repository\Eloquent\ProgramadorRepository;
use Acme\Repository\DiseniadorInterface;
use Acme\Repository\Eloquent\DiseniadorRepository;
use Illuminate\Support\ServiceProvider;

class EmpleadoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('Acme\Repository\EmpleadoInterface', 
            'Acme\Repository\Eloquent\EmpleadoRepository');

        $this->app->bind('Acme\Repository\ProgramadorInterface', 
            'Acme\Repository\Eloquent\ProgramadorRepository');

        $this->app->bind('Acme\Repository\DiseniadorInterface', 
            'Acme\Repository\Eloquent\DiseniadorRepository');
                        
    }
}