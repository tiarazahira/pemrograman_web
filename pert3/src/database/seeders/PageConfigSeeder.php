<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PageConfig;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // $timstamp = \Carbon\Carbon::now()->toDateString();
            // DB::table('page_configs')->insert([
            //     'title' => 'i have benn testing',
            //     'detail' => 'Hallo',
            //     'image' => '',
            //     'created_at' => $timstamp,
            //     'updated_at' => $timstamp,
            // ]);


            PageConfig::create([
                'title' => 'asdasjdkasd',
                'detail' => 'hallo',
                'image' =>''

            ]);
        }
    }
}
