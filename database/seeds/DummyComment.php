<?php

use Illuminate\Database\Seeder;

class DummyComment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('comments')->truncate();

        $users = App\User::count();
        $books = App\Book::count();

        $types = [
            'App\Book', 'App\Ebook', 'App\Audio', 'App\Photo', 'App\Video'
        ];
    }
}
