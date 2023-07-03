<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BarionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barion')->insert ([

            [
                'm_id'=>'1',
                'payment_id'=>'A123',
                'status'=>'123',
                'letrehozas_ideje'=>'123',
                'total'=>'123',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'2',
                'payment_id'=>'C123',
                'status'=>'123',
                'letrehozas_ideje'=>'123',
                'total'=>'123',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'3',
                'payment_id'=>'B123',
                'status'=>'123',
                'letrehozas_ideje'=>'123',
                'total'=>'123',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'4',
                'payment_id'=>'F123',
                'status'=>'A-01',
                'letrehozas_ideje'=>'123',
                'total'=>'123',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],


        ]);
    }
}
