<?php

use Illuminate\Database\Seeder;

class DummyEbook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('ebooks')->truncate();

        $covers = [
            'mv1','mv2','mv3','mv4','mv5','mv-it7','mv-it8','mv-it9','mv-it10','mv-it11','mv-it12',
            'mv-item1','mv-item2','mv-item3','mv-item4','mv-item6','mv-item7','mv-item8','mv-item9',
            'mv-item10','mv-item11','mv-item12'
        ];

        foreach(range(1, 108) as $index) {
            DB::table('ebooks')->insert([
                'name'      => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'isbn'      => $faker->numerify('#############'),
                'ddc'       => $faker->numerify('###.#### ') . $faker->word(),
                'writer'    => $faker->name(),
                'publisher' => $faker->company(),
                'year'      => '1998',
                'synopsis'  => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'folder'    => 'sample',
                'category_id' => rand(1, 6),
                
            ]);
        }
    }
}
