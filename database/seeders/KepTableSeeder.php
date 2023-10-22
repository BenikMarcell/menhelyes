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
                'src'=>'20231022101635.jpg',
                'alt'=>'Kutya1',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'2',
                'kep_cim'=>' macskaM1',
                'src'=>'20231022101708.jpg',
                'alt'=>'macskaM1',
                'leiras'=>'Két kutya sétáltatja egymást',
            ],

            [
                'a_id'=>'3',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022101731.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'4',
                'kep_cim'=>'kutyaM',
                'src'=>'20231022101816.jpg',
                'alt'=>'kutyaM',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],



            [
                'a_id'=>'5',
                'kep_cim'=>'macskaM1',
                'src'=>'20231022101842.jpg',
                'alt'=>'macskaM1',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'6',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022101907.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'7',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022101923.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'8',
                'kep_cim'=>'macskaM1',
                'src'=>'20231022101944.jpg',
                'alt'=>'macskaM1',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'9',
                'kep_cim'=>'kutyaM',
                'src'=>'20231022102006.jpg',
                'alt'=>'kutyaM',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'10',
                'kep_cim'=>'kutyaM',
                'src'=>'20231022102025.jpg',
                'alt'=>'kutyaM',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'11',
                'kep_cim'=>'macskaM1',
                'src'=>'20231022102049.jpg',
                'alt'=>'macskaM1',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'12',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022102112.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'13',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022102128.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            [
                'a_id'=>'14',
                'kep_cim'=>'macskaM2',
                'src'=>'20231022102143.jpg',
                'alt'=>'macskaM2',
                'leiras'=>'Etiam facilisis gravida neque id porta.',
            ],

            

            

        
        ]);
    }
}
