<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Goods')->insert([
           'name'=>'oneMoreItem',
           'shop_description'=>'itemFromSeeder',
           'description'=>'descforitem',
           'icon'=>'pathtotheicon'
        ]);
    }
}
