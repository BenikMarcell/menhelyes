<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SzinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('szin')->insert ([

            [
                'szin'=>'fekete',
            ],
            [
                'szin'=>'fehér',
            ],
            [
                'szin'=>'barna',
            ],
            [
                'szin'=>'szürke',
            ],


        ]);
    }
}
