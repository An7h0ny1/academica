<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DecanosSeeder extends Seeder
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
                'codDecano' => '31',
                'nomDecano' => 'Gerardo Sánchez',
                'facultad' => '10',
            ],
            [
                'codDecano' => '32',
                'nomDecano' => 'Alexander Barón',
                'facultad' => '20',
            ],
            [
                'codDecano' => '33',
                'nomDecano' => 'Leonardo Alfredo',
                'facultad' => '30',
            ],
            [
                'codDecano' => '34',
                'nomDecano' => 'Hernán Alberto',
                'facultad' => '40',
            ],
            [
                'codDecano' => '35',
                'nomDecano' => 'Ana Patricia',
                'facultad' => '50',
            ]
            
        ];
        DB::table('decanos')->insert($datos);
    }
}
