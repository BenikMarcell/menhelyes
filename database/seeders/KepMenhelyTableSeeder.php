<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepMenhelyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menhely_kep')->insert ([
        [
            'm_id'=>'1',
            'kepCim'=>'Menhely1',
            'src'=>'20231029165149.jpg',
            'alt'=>'Menhely.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'2',
            'kepCim'=>'Menhely2',
            'src'=>'20231029165223.jpg',
            'alt'=>'TappancsM.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'3',
            'kepCim'=>'Menhely3',
            'src'=>'20231029165252.jpg',
            'alt'=>'MenhelyenM.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'4',
            'kepCim'=>'Menhely4',
            'src'=>'20231029165315.jpg',
            'alt'=>'Menhely.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'5',
            'kepCim'=>'Menhely5',
            'src'=>'20231029165342.jpg',
            'alt'=>'Mum.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'6',
            'kepCim'=>'Menhely6',
            'src'=>'20231029165408.jpg',
            'alt'=>'MenhelyenM.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'7',
            'kepCim'=>'Menhely7',
            'src'=>'20231029165428.jpg',
            'alt'=>'Mum.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'8',
            'kepCim'=>'Menhely8',
            'src'=>'20231029165447.jpg',
            'alt'=>'Menhely.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ],
        [
            'm_id'=>'9',
            'kepCim'=>'Menhely9',
            'src'=>'20231029165529.jpg',
            'alt'=>'MtappancsM.jpg',
            'leiras'=>'Etiam facilisis gravida neque id porta.',
        ]
        ]);



    }
}
