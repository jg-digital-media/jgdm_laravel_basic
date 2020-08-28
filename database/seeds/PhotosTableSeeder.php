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
            'photo_title' => 'Boo: Headshot #1',
            'photo_url' => 'img/boo_v1.png',
            'photo_description' => 'Boo: Headshot #1'
        ]);
        
        DB::table('photos')->insert([
            'photo_number' => '2',
            'photo_title' => 'Eyeshot closeup of a Cats open eye.',
            'photo_url' => 'img/boo_v2.png',
            'photo_description' => 'Eyeshot closeup of a Cats open eye.'
        ]);        
        
        DB::table('photos')->insert([
            'photo_number' => '3',
            'photo_title' => 'Front head shot.',
            'photo_url' => 'img/boo_v3.png',
            'photo_description' => 'Front head shot.'
        ]);    
        
        DB::table('photos')->insert([
            'photo_number' => '4',
            'photo_title' => 'Front head shot. #2',
            'photo_url' => 'img/boo_v4.png',
            'photo_description' => 'Front head shot. #2'
        ]);   
        
        DB::table('photos')->insert([
            'photo_number' => '5',
            'photo_title' => 'Head portrait, looking right, from the right hand side.',
            'photo_url' => 'img/boo_v7.png',
            'photo_description' => 'Head portrait, looking right, from the right hand side.'
        ]);
    }
}
