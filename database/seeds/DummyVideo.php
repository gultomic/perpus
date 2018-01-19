<?php

use Illuminate\Database\Seeder;

class DummyVideo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('videos')->truncate();

        $covers = [
            'mv1','mv2','mv3','mv4','mv5','mv-it7','mv-it8','mv-it9','mv-it10','mv-it11','mv-it12',
            'mv-item1','mv-item2','mv-item3','mv-item4','mv-item6','mv-item7','mv-item8','mv-item9',
            'mv-item10','mv-item11','mv-item12'
        ];

        foreach(range(1, 108) as $index) {
            DB::table('videos')->insert([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'director' => $faker->name(),
                'production' => $faker->company(),
                'detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'cover' => 'img/samples/' . $covers[array_rand($covers)] . '.jpg',
                'file' => 'img/samples/sample.mp4',
                'category_id' => rand(13, 17),
            ]);
        }
    }
}
