<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Acme\Repository\Eloquent\EmpresaRepository;
use Acme\Repository\EmpresaInterface;

class EmpresaServiceProvider extends ServiceProvider
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

        $this->app->bind('Acme\Repository\EmpresaInterface', 
            'Acme\Repository\Eloquent\EmpresaRepository');                        
    }
}