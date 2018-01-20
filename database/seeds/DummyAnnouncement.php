<?php

use Illuminate\Database\Seeder;

class DummyAnnouncement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('announcements')->truncate();

        foreach(range(1, 8) as $index) {
            DB::table('announcements')->insert([
                'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }
}
