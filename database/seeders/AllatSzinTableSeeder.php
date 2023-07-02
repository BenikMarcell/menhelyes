<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AllatSzinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allatszinek')->insert ([

            [
                'a_id'=>'1',
                'szin_id'=>'1',
            ],
            [
                'a_id'=>'2',
                'szin_id'=>'2',
            ],
            [
                'a_id'=>'3',
                'szin_id'=>'3',
            ],
            [
                'a_id'=>'4',
                'szin_id'=>'4',
            ],


        ]);
    }
}
