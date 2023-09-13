<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allat_kep')->insert ([
            [
                'a_id'=>'1',
                'kep_cim'=>'Kutya1',
                'src'=>'20230913221046.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec',
            ],

            [
                'a_id'=>'2',
                'kep_cim'=>' Két kutya',
                'src'=>'20230913215759.jpg',
                'alt'=>'Két kutya',
                'leiras'=>'Két kutya sétáltatja egymást',
            ],

            [
                'a_id'=>'3',
                'kep_cim'=>'Mérges macska',
                'src'=>'20230913215903.jpg',
                'alt'=>'Macska',
                'leiras'=>'Valamiért dühös a macska',
            ],

            [
                'a_id'=>'4',
                'kep_cim'=>'Négy kutya',
                'src'=>'20230913220002.jpg',
                'alt'=>'Kutyák',
                'leiras'=>'Kutyák egyben',
            ],
        
        ]);
    }
}
