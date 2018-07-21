<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class photoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Photos')->insert([
        'name'=>'New Photo',
        'alt'=>'New Photo',
        'title'=>'New Photo',
        'path'=>'NewPhoto.png',
        ]);



    }
}
