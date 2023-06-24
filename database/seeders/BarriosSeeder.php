<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BarriosSeeder extends Seeder
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
                'codBarrio' => '10',
                'nomBarrio' => 'Lorenzo',
                'estBarrio' => '2',
                'comuna' => '4',
            ],
            [
                'codBarrio' => '20',
                'nomBarrio' => 'Tejar',
                'estBarrio' => '3',
                'comuna' => '6',
            ],
            [
                'codBarrio' => '30',
                'nomBarrio' => 'Miraflores',
                'estBarrio' => '4',
                'comuna' => '8',
            ],
            [
                'codBarrio' => '40',
                'nomBarrio' => 'Pandiaco',
                'estBarrio' => '5',
                'comuna' => '10',
            ],
            [
                'codBarrio' => '50',
                'nomBarrio' => 'Santa Barbar',
                'estBarrio' => '1',
                'comuna' => '12',
            ]
        ];
        DB::table('barrios')->insert($datos);
    }
}
