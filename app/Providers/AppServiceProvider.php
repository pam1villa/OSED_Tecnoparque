<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('superAdmin', 
        //Función anonima
            function ()
            {
                $id = Auth::user()->idRol;
                $user = new User();
                if ($user->checkRole($id, 'superAdministrador')) 
                {
                    return true;
                }
                return false;
            }
        );

        Blade::if('admin', 
            function ()
            {
                $id = Auth::user()->idRol;
                $user = new User();
                if ($user->checkRole($id, 'administrador')) 
                {
                    return true;
                }
                return false;
            }
        );

        Blade::if('usuario', 
            function ()
            {
                $id = Auth::user()->idRol;
                $user = new User();
                if ($user->checkRole($id, 'usuario')) 
                {
                    return true;
                }
                return false;
            }
        );
    }
}
