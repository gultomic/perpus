<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DummyUser::class);
        $this->call(DummyCategory::class);
        $this->call(DummyLocation::class);
        $this->call(DummyBook::class);
        $this->call(DummyRent::class);
    }
}
