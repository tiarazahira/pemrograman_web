<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PageConfig::create([
            // 'title' => 'My Website',
            // 'description' => 'This is my website',
            // 'keywords' => 'website, my website',
            // 'author' => 'John Doe',
            // 'favicon' => '',
            // 'logo' => '',
            // 'og_image' => '',
            // 'og_title' => '',
            // 'og_description' => '',
            // 'og_url' => '',
            // 'og_type' => '',
            'title' => 'My Website',
            'detail' => 'This is my website',
            'image' => '',
        ]);
    }
}
