<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crea los tres roles por defecto cada que hago una migración con seeders.

        $rol1 = new Roles();//Crea una intancia del objeto (Modelo)
        $rol1->name = 'superAdministrador';//Acceso a los atributos (name) void y eso va a guardar administrador.
        $rol1->save();//Lo envia a la BD (Guarda)

        $rol2 = new Roles();//Crea una intancia del objeto (Modelo)
        $rol2->name = 'administrador';//Acceso a los atributos (name) void y eso va a guardar administrador.
        $rol2->save();//Lo envia a la BD (Guarda)

        $rol3 = new Roles();//Crea una intancia del objeto (Modelo)
        $rol3->name = 'usuario';//Acceso a los atributos (name) void y eso va a guardar administrador.
        $rol3->save();//Lo envia a la BD (Guarda)
    }
}

//Crea una instancia del modelo Rol y llama el campo que tiene 
//el modelo que es name y luego se le asigna el nombre y despues se guarda;