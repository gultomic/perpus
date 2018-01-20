<?php

use Illuminate\Database\Seeder;

class DummyInteractive extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('interactives')->truncate();

        $covers = [
            'mv1','mv2','mv3','mv4','mv5','mv-it7','mv-it8','mv-it9','mv-it10','mv-it11','mv-it12',
            'mv-item1','mv-item2','mv-item3','mv-item4','mv-item6','mv-item7','mv-item8','mv-item9',
            'mv-item10','mv-item11','mv-item12'
        ];

        foreach(range(1, 28) as $index) {
            DB::table('interactives')->insert([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'publisher' => $faker->company(),
                'description' => $faker->realText($maxNbChars = 150, $indexSize = 2),
                'year' => '1998',
                'folder' => 'sample',
                'file' => 'sample.swf',
                'cover' => $covers[array_rand($covers)] . '.jpg',
                'category_id' => rand(7, 12),
            ]);
        }
    }
}
