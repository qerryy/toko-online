<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);
    }
}
