<?php

use Illuminate\Database\Seeder;

class DummyCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
            [
                'type' => 1,
                'data' => [
                    'Kategori BSE',
                    'Kategori Non BSE',
                    'Kamus',
                    'Fiksi',
                    'Non Fiksi',
                    'Biografi',
                ]
            ],
            [
                'type' => 2,
                'data' => [
                    'Materi Fisika',
                    'Materi Biologi',
                    'Materi Matematika',
                    'Materi Sejarah',
                    'Materi PPKn',
                    'Materi Geografi',
                ]
            ],
            [
                'type' => 3,
                'data' => [
                    'Galeri Video Pendidikan',
                    'Galeri Video Budaya',
                    'Galeri Video Pengetahuan',
                    'Galeri Video Biografi',
                    'Galeri Video Dokumenter',
                ]
            ],
            [
                'type' => 4,
                'data' => [
                    'Galeri Lagu Kebangsaan Nasional',
                    'Galeri Lagu-lagu Daerah',
                    'Galeri Pidato',
                    'Galeri Ceramah',
                ]
            ],
            [
                'type' => 5,
                'data' => [
                    'Galeri Foto Pahlawan',
                    'Galeri Foto Provinsi Indonesia',
                    'Galeri Foto Rumah Adat Indonesia',
                    'Galeri Foto Pakaian Adat Indonesia',
                ]
            ],
        ];
        
        foreach($categories as $key => $val){
            foreach($val['data'] as $item){
                // echo $item . ': ' . $val['type'] . "\n";
                DB::table('categories')->insert([
                    'name' => $item,
                    'type' => $val['type'],
                ]);
            }
        }
    }
}
