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
                'src'=>'images\kutya1.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec',
            ],

            [
                'a_id'=>'2',
                'kep_cim'=>'Kutya2',
                'src'=>'images\kutya1.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec',
            ],
            [
                'a_id'=>'3',
                'kep_cim'=>'Kutya3',
                'src'=>'images\kutya1.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec',
            ],
            [
                'a_id'=>'4',
                'kep_cim'=>'Kutya4',
                'src'=>'images\kutya1.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec',
            ],


        ]);
    }
}