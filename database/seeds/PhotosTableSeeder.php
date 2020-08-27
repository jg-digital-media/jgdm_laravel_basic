<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data
        DB::table('photos')->insert([
            'photo_number' => '1',
            'photo_title' => 'Boo #1',
            'photo_url' => 'img/boo_v1.png',
            'photo_description' => 'Test description 1'
        ]);
        
        DB::table('photos')->insert([
            'photo_number' => '2',
            'photo_title' => 'Boo #2',
            'photo_url' => 'img/boo_v2.png',
            'photo_description' => 'Test description 2'
        ]);
        
        //create data
        DB::table('photos')->insert([
            'photo_number' => '3',
            'photo_title' => 'Boo #3',
            'photo_url' => 'img/boo_v3.png',
            'photo_description' => 'Test descrption 3'
        ]);
    }
}
