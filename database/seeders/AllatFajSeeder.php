<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllatFajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allat_faj')->insert ([

            [
                'faj'=>'kutya',
            ],
            [
                'faj'=>'macska',
            ],
            [
                'faj'=>'egér',
            ],
            [
                'faj'=>'mókus',
            ],


        ]);
    }
}
