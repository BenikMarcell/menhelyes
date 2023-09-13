<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TamogatasMenhelyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tamogatas_menhely')->insert ([

            [
                'm_id'=>'1',
                'payment_id'=>'1',
                'osszeg'=>'500000',
                'megjegyzes'=>'Boldogok vagyunk!',
            ],
            [
                'm_id'=>'2',
                'payment_id'=>'2',
                'osszeg'=>'600000',
                'megjegyzes'=>'Boldogok vagyunk!',
            ],
            [
                'm_id'=>'3',
                'payment_id'=>'3',
                'osszeg'=>'700000',
                'megjegyzes'=>'Boldogok vagyunk!',
            ],
            [
                'm_id'=>'4',
                'payment_id'=>'4',
                'osszeg'=>'800000',
                'megjegyzes'=>'Boldogok vagyunk!',
            ],
        ]);
    }
}
