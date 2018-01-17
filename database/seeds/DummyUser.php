<?php

use Illuminate\Database\Seeder;

class DummyUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@digi.lib',
            'password' => Hash::make('admin123'),
            'bcode' => '2' . sprintf("%'.012d\n", 1),
            'role' => 'admin',
        ]);

        foreach(range(2,60) as $index) {
            $name = $faker->unique()->lastName();
            DB::table('users')->insert([
                'name' => strtolower($name),
                'email' => strtolower($name) . '@digi.lib',
                'password' => Hash::make('tes123'),
                'bcode' => '2' . sprintf("%'.012d\n", (int)$index),
                'role' => 'user',
            ]);
        }
    }
}
