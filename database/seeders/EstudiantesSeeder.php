<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
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
                'codEstudiante' => '61',
                'nomEstudiante' => 'Juan',
                'edadEstudiante' => '20',
                'fechaEstudiante' => '2003-06-15',
                'sexEstudiante' => 'M',
                'ciudad' => '100',
                'barrio' => '10',
                'programa' => '51'

            ],
            [
                'codEstudiante' => '62',
                'nomEstudiante' => 'Pedro',
                'edadEstudiante' => '21',
                'fechaEstudiante' => '2002-09-28',
                'sexEstudiante' => 'M',
                'ciudad' => '200',
                'barrio' => '20',
                'programa' => '52'

            ],
            [
                'codEstudiante' => '63',
                'nomEstudiante' => 'Miguel',
                'edadEstudiante' => '22',
                'fechaEstudiante' => '2001-12-03',
                'sexEstudiante' => 'M',
                'ciudad' => '300',
                'barrio' => '30',
                'programa' => '53'

            ],
            [
                'codEstudiante' => '64',
                'nomEstudiante' => 'Patricia',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-08-10',
                'sexEstudiante' => 'F',
                'ciudad' => '400',
                'barrio' => '40',
                'programa' => '54'

            ],
            [
                'codEstudiante' => '65',
                'nomEstudiante' => 'Valentina',
                'edadEstudiante' => '24',
                'fechaEstudiante' => '1999-04-22',
                'sexEstudiante' => 'F',
                'ciudad' => '500',
                'barrio' => '50',
                'programa' => '55'

            ]

        ];
        DB::table('estudiantes')->insert($datos);
    }
}
