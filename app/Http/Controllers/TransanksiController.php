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
    public function create(Request $request)
    {
        $list_obat = collect();

        if ($request->get('id_pemeriksaan')) {
            $obat_obatan = ResepObat::with('barang')
            ->where('id_pemeriksaan', $request->get('id_pemeriksaan'))
            ->get();

            foreach ($obat_obatan as $obat) {
                $list_obat->push((object)[
                    'id_resep_obat' => $obat->id,
                    'id_barang' => $obat->barang->id,
                    'nama' => $obat->barang->nama,
                    'jumlah' => $obat->jumlah,
                    'harga_satuan' => $obat->barang->harga_satuan,
                    'total' => $obat->jumlah * $obat->barang->harga_satuan
                    ]);
                }
            Session::put('list_obat', $list_obat);
        }

        $list_pemeriksaan = Pemeriksaan::with('resep_obat')
            ->whereHas('resep_obat', function ($query) {
                $query->withCount('barang')
                    ->having('barang_count', '>', 0);
            })
            ->where('status', 3)
            ->orderBy('tanggal_pemeriksaan', 'desc')
            ->orderBy('jam_pemeriksaan', 'asc')
            ->get();

        return view('kasir.transaksi.obat.create', compact('list_pemeriksaan', 'list_obat'));
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
