<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuario')->insert(
            array(
                0=>array(
                    'name' => "Roman",
                    'email' => "Roman@test.com",
                    'phone'	=> "4729290",
                    'message'=> "Hola mundo!",
                ),
                1=>array(
                        'name' => "Flor",
                        'email' => "flor@test.com",
                        'phone'	=> "475690",
                        'message'=> "Hola mundo 2!",
                    )
            )
        );
    }
}
