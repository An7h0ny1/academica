<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
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
                'codDepto' => '21',
                'nomDepto' => 'Nariño',
            ],
            [
                'codDepto' => '22',
                'nomDepto' => 'Valle',
            ],
            [
                'codDepto' => '23',
                'nomDepto' => 'Cauca',
            ],
            [
                'codDepto' => '24',
                'nomDepto' => 'Cundinamarca',
            ],
            [
                'codDepto' => '25',
                'nomDepto' => 'Atlantico',
            ]
            
            
        ];
        DB::table('departamentos')->insert($datos);
    }
}
