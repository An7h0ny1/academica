<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CalificacionesSeeder extends Seeder
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
                'estudiante' => '61',
                'materia' => '11',
                'profesor' => '1',
                'parcial1' => '4',
                'parcial2' => '4',
                'eFinal' => '4',
                'nFinal' => '4',
                'estado' => 'A',
            ],
            [
                'estudiante' => '62',
                'materia' => '12',
                'profesor' => '2',
                'parcial1' => '3',
                'parcial2' => '3',
                'eFinal' => '3',
                'nFinal' => '3',
                'estado' => 'A',
            ],
            [
                'estudiante' => '63',
                'materia' => '13',
                'profesor' => '3',
                'parcial1' => '2',
                'parcial2' => '2',
                'eFinal' => '2',
                'nFinal' => '2',
                'estado' => 'R',
            ],
            [
                'estudiante' => '64',
                'materia' => '14',
                'profesor' => '4',
                'parcial1' => '1',
                'parcial2' => '1',
                'eFinal' => '1',
                'nFinal' => '1',
                'estado' => 'R',
            ],
            [
                'estudiante' => '65',
                'materia' => '15',
                'profesor' => '5',
                'parcial1' => '5',
                'parcial2' => '5',
                'eFinal' => '5',
                'nFinal' => '5',
                'estado' => 'A',
            ]
        ];
        DB::table('regnotas')->insert($datos);
    }
}
