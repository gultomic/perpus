<?php

use Illuminate\Database\Seeder;

class DummyRent extends Seeder
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
        $books = App\Book::count();

        DB::table('rents')->truncate();

        // Past transactions
        foreach(range(2, $users) as $user) {
            if($user != 8 || $user != 25 || $user != 60) {
                $rent = rand(3, 15);

                foreach(range(2, $rent) as $index) {
                    $book = rand(1, $books);
                    $mo = rand(1, 6);
                    $sd = rand(1, 21);
                    $borrow = date('Y-m-d', mktime(0, 0, 0, date('m')-$mo, $sd, date('Y')-1));
                    $return = date('Y-m-d', mktime(0, 0, 0, date('m')-$mo, $sd+1, date('Y')-1));

                    if($sd != 4 and $sd != 14) {
                        $returned = $return;
                        $pay = null;
                    }else{
                        $late = rand(2, 4);
                        $returned = date('Y-m-d', mktime(0, 0, 0, date('m')-$mo, $sd + $late, date('Y')-1));
                        $pay = 1000 * $late;
                    }

                    DB::table('rents')->insert([
                        'user_id' => $user,
                        'book_id' => $book,
                        'borrow' => $borrow,
                        'return' => $return,
                        'returned' => $returned,
                        'pay' => $pay
                    ]);
                }
            }
        }
        // Late transaction
        //Progress transaction
    }
}
