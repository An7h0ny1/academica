<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
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
                'codPrograma' => '51',
                'nomPrograma' => 'Arquitectura',
                'facultad' => '10'

            ],
            [
                'codPrograma' => '52',
                'nomPrograma' => 'Sistemas',
                'facultad' => '20'

            ],
            [
                'codPrograma' => '53',
                'nomPrograma' => 'Derecho',
                'facultad' => '30'

            ],
            [
                'codPrograma' => '54',
                'nomPrograma' => 'Matematicas',
                'facultad' => '40'

            ],
            [
                'codPrograma' => '55',
                'nomPrograma' => 'Medicina',
                'facultad' => '50'

            ]
        ];
        DB::table('programas')->insert($datos);
    }
}
