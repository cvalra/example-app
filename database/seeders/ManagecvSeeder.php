<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\managecv;

class ManagecvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        managecv::truncate();
        managecv::create([
            'category' => 'Work', 
            'date' => '22-02-22',
            'title' => 'Work',
            'participant' => 'Moderator',
            'theme' => '',
            'level' => '',
            'position' => '',
        ]);
    }
}
