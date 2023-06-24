<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos =[
            [
                'codProfesor' => '1',
                'nomProfesor' => 'Carlos',
                'catProfesor' => 'ingenieria',
            ],
            [
                'codProfesor' => '2',
                'nomProfesor' => 'Andres',
                'catProfesor' => 'Derecho',
            ],
            [
                'codProfesor' => '3',
                'nomProfesor' => 'Andrea',
                'catProfesor' => 'CienciasE',
            ],
            [
                'codProfesor' => '4',
                'nomProfesor' => 'Felipe',
                'catProfesor' => 'Medicina',
            ],
            [
                'codProfesor' => '5',
                'nomProfesor' => 'Luis',
                'catProfesor' => 'Artes',
            ]
        ];
        DB::table('profesores')->insert($datos);
    }
}
