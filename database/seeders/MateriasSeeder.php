<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
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
                'codMateria' => '11',
                'nomMateria' => 'Calculo',
                'creMateria' => '1',
            ],
            [
                'codMateria' => '12',
                'nomMateria' => 'Diseño',
                'creMateria' => '2',
            ],
            [
                'codMateria' => '13',
                'nomMateria' => 'Biofisica',
                'creMateria' => '3',
            ],
            [
                'codMateria' => '14',
                'nomMateria' => 'Geometria',
                'creMateria' => '4',
            ],
            [
                'codMateria' => '15',
                'nomMateria' => 'Procesos Civiles',
                'creMateria' => '5',
            ]
            
        ];
        DB::table('materias')->insert($datos);
    }
}
