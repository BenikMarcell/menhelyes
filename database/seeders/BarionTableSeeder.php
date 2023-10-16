<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BarionTableSeeder extends Seeder
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
                'total'=>'1237',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'E123',
                'status'=>'123',
                'letrehozas_ideje'=>'124',
                'total'=>'1239',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'C123',
                'status'=>'123',
                'letrehozas_ideje'=>'125',
                'total'=>'1230',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'V123',
                'status'=>'123',
                'letrehozas_ideje'=>'126',
                'total'=>'1233',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'S123',
                'status'=>'123',
                'letrehozas_ideje'=>'127',
                'total'=>'1231',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'D123',
                'status'=>'123',
                'letrehozas_ideje'=>'128',
                'total'=>'1236',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'F123',
                'status'=>'123',
                'letrehozas_ideje'=>'129',
                'total'=>'1235',
                'fizetes_ideje'=>'123',
                'get_data'=>'123',
            ],
            [
                'm_id'=>'1',
                'payment_id'=>'G123',
                'status'=>'123',
                'letrehozas_ideje'=>'130',
                'total'=>'1234',
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
