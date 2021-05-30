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
        DB::table('dokter')->insert([[
            'nama_dokter' => 'Dinda Hartanto',
            'jenis_kelamin' => 'Wanita',
            'alamat' => 'Jl.Pakuniran no 363 A',
            'no_telp' => '0881026407070',
        ],[
            'nama_dokter' => 'Windah Basudarah',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Jl.Mayangan 12 A',
            'no_telp' => '081331026407070',
        ],[
            'nama_dokter' => 'Widia Atika',
            'jenis_kelamin' => 'Wanita',
            'alamat' => 'Jl. Pecel Lele 14 A',
            'no_telp' => '081721031233',
        ],[
            'nama_dokter' => 'Arif Susilo',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Jl.Budi Suprapto 13B',
            'no_telp' => '08213412332',
        ],[
            'nama_dokter' => 'Vivian Sumanto',
            'jenis_kelamin' => 'Wanita',
            'alamat' => 'Jl.Indah Permana 13B',
            'no_telp' => '08127117212',
        ]]);
    }
}
