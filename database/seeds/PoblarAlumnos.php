<?php

use App\Alumno;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PoblarAlumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $poblar = Faker::create('es_ES');
        // insertamos datos aleatorios, 100 alumnos
        for ($i = 0; $i < 100; $i++) {
            Alumno::create([
                'edad'=> $poblar->numberBetween(1,100),
                'nombre'=> $poblar->name,
                'email' => $poblar->email,
                'direccion' => $poblar->address
            ]);
        }

        /*
        Alumno::create([
            'edad'=> 32,
            'nombre'=> 'Jose',
            'email' => 'email@gmail.com',
            'direccion' => 'Los Álamos 2'
        ]);
        */
    }
}
