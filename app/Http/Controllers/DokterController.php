<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function data()
    {
        $dokter = DB::table('dokter')->get();

        return $dokter;
        return view('dokter.data_dokter', ['dokter' => $dokter]);
    }
}
