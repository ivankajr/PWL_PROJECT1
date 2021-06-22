<?php

namespace App\Http\Controllers;

use App\Models\transanksi;
use App\Models\Hewan as hwn;
use App\Models\Pemilik as pmlk;
use App\Models\Obat as obt;
use App\Models\Pelayanan as ply;
use Illuminate\Http\Request;

class TransanksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transanksi = transanksi::all();
        return view('transanksi/index', compact('transanksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = pmlk::all();
        $Hewan = hwn::all();
        $obat = obt::all();
        $pelayanan = ply::all();
        return view('transanksi.create', compact('pemilik', 'Hewan', 'obat', 'pelayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pemilik_id' => 'required',
            'hewan_id' => 'required',
            'pelayanan_id' => 'required',
            'obat_id' => 'required',
            'harga' => 'required'
        ]);
        $transanksi = new Transanksi;
        $transanksi->pemilik_id = $request->get('pemilik_id');
        $transanksi->hewan_id = $request->get('hewan_id');
        $transanksi->pelayanan_id = $request->get('pelayanan_id');
        $transanksi->obat_id = $request->get('obat_id');
        $transanksi->harga = $request->get('harga');
        $transanksi->save();

        return redirect('transanksi')->with('status', 'data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transanksi  $transanksi
     * @return \Illuminate\Http\Response
     */
    public function show(transanksi $transanksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transanksi  $transanksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transanksi $transanksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transanksi  $transanksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transanksi $transanksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transanksi  $transanksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transanksi $transanksi)
    {
        //
    }
}
