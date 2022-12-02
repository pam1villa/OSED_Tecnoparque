<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = 'superAdministrador';
        $usuario->cedula = "1193130489";
        $usuario->email = "superadmin@gmail.com";
        $usuario->phone = "3242007389";
        $usuario->password = Hash::make('741230');
        $usuario->idRol = 1;
        $usuario->save();
    }
}
