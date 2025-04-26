<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'nomor' => '1',
            'name' => 'Logo 1',
            'description' => 'Logo 1 Description',
            'image' => '',
            'link' => 'http://localhost/about'
        ]);
    }
}
