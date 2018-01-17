<?php

use Illuminate\Database\Seeder;

class DummyLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = App\User::count();
        DB::table('userlogins')->truncate();

        foreach(range(1, $users) as $user){
            $logs = rand(3, 22);

            foreach(range(1, $logs) as $index){
                $time = $faker->dateTimeBetween($startDate = '-3 years', $max = 'now');
                App\Userlogin::insert([
                    'user_id' => $user,
                    'created_at' => $time,
                    'updated_at' => $time,
                ]);
            }
        }
    }
}
