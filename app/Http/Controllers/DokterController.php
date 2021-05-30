<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function data()
    {
        $dokter = DB::table('dokter')->get();

        // return $dokter;
        return view('dokter.data_dokter', ['dokter' => $dokter]);
    }
    public function add()
    {
        return view('dokter.add_dokter');
    }

    public function addProcess(Request $request)
    {
        DB::table('dokter')->insert([
            'nama_dokter' => $request -> nama_dokter ,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp
        ]);
        return redirect('dokter') -> with('status','Data Berhasil Di Tambah');
    }
}
