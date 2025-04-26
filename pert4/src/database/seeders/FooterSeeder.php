<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Footer::create([
            'section' => 'Service',
            'label' => 'Online Serice',
            'url' => 'http://localhost',
            'order' => 1,
        ]);
    }
}
