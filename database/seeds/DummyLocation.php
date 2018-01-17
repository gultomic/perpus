<?php

use Illuminate\Database\Seeder;

class DummyLocation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('locations')->truncate();

        foreach ((range(1, 8)) as $index) {
            DB::table('locations')->insert([
                'name'        => $faker->unique()->state(),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2)
            ]);
        }
    }
}
