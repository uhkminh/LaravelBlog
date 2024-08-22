<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Blogpost::create([
            'Title' => "Hello And Welcome To My Blog", 
            'Subtitle' => "Thank you for reading", 
            'BriefContent' => "This is the start of My Blog", 
            'FullContent' => "Hello everyone. My name is JD Vance. This is my first blog, and I will be sharing with you all the pictures I took with my couch.", 
            'IsPublished' => 1
        ]);        
    }
}
