<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Daministrador',
            'email' => 'luzmaya.gt@gmail.com',
            'password' => bcrypt("rElOjd1pARed"),
            'estado' => '1',
            'tipo' => '39',
            'descripcion_user' => 'Usuario encargado de administrar la pagina',
            'foto' => 'default.png',
           
    
        ]);
    }
}
