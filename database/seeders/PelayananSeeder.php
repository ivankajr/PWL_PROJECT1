<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelayanans')->insert([[
            'jenis_pelayanan' => 'Grooming Hewan',
            'harga' => '40000',
        ]]);
    }
}
