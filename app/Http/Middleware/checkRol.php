<?php
//Para chequear el rol en la ruta
namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;
use Illuminate\Http\Request;

class checkRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        $rolUser = Roles::find($request->user()->idRol);
        $roles =  explode('-', $roles);

        //Recorrer los roles y guardarlos en roles
        foreach ($roles as $role) {
            if ($role == $rolUser->name) {
                return $next($request);
            }
        }
        //Redirreciona a la ruta si no entra al if
        return redirect()->route('dashboard');
    }
}

//Consulta la info del rol con el idRol que tiene el usuario y lo valida si es el mismo rol que tiene permiso en la ruta (middleware>chechRol)