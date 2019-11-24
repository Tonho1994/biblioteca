<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Carbon;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => Str::random(10),
            'apellidoP' => Str::random(10).'1apellido',
            'apellidoM' => Str::random(10).'2apellido',

            'fnacimiento' => Carbon::parse('2000-01-01'),
            'user' => Str::random(10),
            'tipo_usuario' => 'Escritor',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
