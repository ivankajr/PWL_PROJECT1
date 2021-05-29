<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            'nama_dokter' => 'Dinda Hartanto',
            'jenis_kelamin' => 'Wanita',
            'alamat' => 'Jl.Pakuniran no 363 A',
            'no_telp' => '0881026407070',
        ]);
    }
}
