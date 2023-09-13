<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TamogatasAllatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tamogatas_allat')->insert ([

            [
                'a_id'=>'1',
                'payment_id'=>'123',
                'osszeg'=>'500000',
                'megjegyzes'=>'Visszatérő támogatónk!',
            ],
            [
                'a_id'=>'2',
                'payment_id'=>'456',
                'osszeg'=>'400000',
                'megjegyzes'=>'Visszatérő támogatónk!',
            ],
            [
                'a_id'=>'3',
                'payment_id'=>'786',
                'osszeg'=>'300000',
                'megjegyzes'=>'Visszatérő támogatónk!',
            ],
            [
                'a_id'=>'4',
                'payment_id'=>'111',
                'osszeg'=>'200000',
                'megjegyzes'=>'Visszatérő támogatónk!',
            ],


        ]);
    }
}
