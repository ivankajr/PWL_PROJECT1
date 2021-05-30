<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JenishewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenishewan')->insert([[
            'jenis_hewan' => 'Kucing',
        ],[
            'jenis_hewan' => 'Anjing',
        ],[
            'jenis_hewan' => 'Hamster',
        ],[
            'jenis_hewan' => 'Kelinci',
        ],[
            'jenis_hewan' => 'Sugar Glider',
        ]]);
    }
}
