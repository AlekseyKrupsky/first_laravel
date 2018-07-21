<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(photoSeeder::class);
//         $this->call(PostGoods::class);
        $this->call(TestSeeder::class);



    }
}
