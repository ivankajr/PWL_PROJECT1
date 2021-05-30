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
        // $request->validate([
        //     'nama_dokter' => 'required|min:2',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        //     'no_telp' => 'required',
        // ]);
        DB::table('dokter')->insert([
            'nama_dokter' => $request -> nama_dokter ,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp
        ]);
        return redirect('dokter') -> with('status','Data Berhasil Di Tambah');
    }
    public function edit($id_dokter)
    {
        $dokter = DB::table('dokter')->where('id_dokter', $id_dokter)->first();
        return view('dokter/edit_dokter', compact('dokter'));
    }
    public function editProcess(Request $request, $id_dokter)
    {
        $dokter = DB::table('dokter')->where('id_dokter', $id_dokter)
        ->update([
            'nama_dokter' => $request -> nama_dokter ,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp
        ]);
        return redirect('dokter') -> with('status','Data Berhasil Di Edit');
    }
    public function delete($id_dokter){
        DB::table('dokter') -> where('id_dokter', $id_dokter)->delete();
        return redirect('dokter') -> with('status','Data Berhasil Di Hapus');
    }
}
