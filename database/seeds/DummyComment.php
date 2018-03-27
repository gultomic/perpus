<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $make = [
            [
                'type' => 'App\Book',
                'count' => App\Book::count(),
            ],
            [
                'type' => 'App\EBook',
                'count' => App\Ebook::count(),
            ],
            [
                'type' => 'App\Audio',
                'count' => App\Audio::count(),
            ],
            [
                'type' => 'App\Photo',
                'count' => App\Photo::count(),
            ],
            [
                'type' => 'App\Video',
                'count' => App\Video::count(),
            ],
        ];

        foreach($make as $key => $val){
            foreach(range(1, $val['count']) as $type_id){
                $comments = rand(1, 5);
                $time = Carbon::createFromTimestamp($faker->dateTimeBetween($startDate = "-1 years", $endDate = '-3 days')->getTimestamp());
                $actTime = Carbon::createFromFormat('Y-m-d H:i:s', $time);
                foreach(range(1, $comments) as $comment){
                    $actTime = $actTime->addMinutes($faker->numberBetween(1, 5));
                    App\Comment::insert([
                        'user_id' => rand(2, $users),
                        'body' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                        'commentable_id' => $type_id,
                        'commentable_type' => $val['type'],
                        'created_at' => $actTime,
                        'updated_at' => $actTime,
                    ]);
                }
            }
        }
    }
}
