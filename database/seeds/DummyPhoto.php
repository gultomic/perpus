<?php

use Illuminate\Database\Seeder;

class DummyPhoto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('photos')->truncate();

        $covers = [
            'mv1','mv2','mv3','mv4','mv5','mv-it7','mv-it8','mv-it9','mv-it10','mv-it11','mv-it12',
            'mv-item1','mv-item2','mv-item3','mv-item4','mv-item6','mv-item7','mv-item8','mv-item9',
            'mv-item10','mv-item11','mv-item12'
        ];

        foreach(range(1, 108) as $index) {
            DB::table('photos')->insert([
                'name'      => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'creator'    => $faker->name(),
                'detail'  => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'cover' => 'cover.jpg',
                'folder'    => 'sample',
                'category_id' => rand(22, 25),
            ]);
        }
    }
}
