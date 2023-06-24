<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
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
                'codCiudad' => '100',
                'nomCiudad' => 'Pasto',
                'departamento' => '21',
            ],
            [
                'codCiudad' => '200',
                'nomCiudad' => 'Cali',
                'departamento' => '22',
            ],
            [
                'codCiudad' => '300',
                'nomCiudad' => 'Popayan',
                'departamento' => '23',
            ],
            [
                'codCiudad' => '400',
                'nomCiudad' => 'Bogota',
                'departamento' => '24',
            ],
            [
                'codCiudad' => '500',
                'nomCiudad' => 'Barranquilla',
                'departamento' => '25',
            ]
        ];
        DB::table('ciudades')->insert($datos);
    }
}
