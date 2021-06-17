<?php

namespace App\Http\Controllers;

use App\Models\pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelayanan  = pelayanan::all();
        return view('pelayanan/index', compact('pelayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelayanan = pelayanan::all();
        return view('pelayanan.create', compact('pelayanan'));
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
            'jenis_pelayanan' => 'required',
            'harga' => 'required',

        ]);
        $pelayanan = new pelayanan;
        $pelayanan->jenis_pelayanan = $request->get('jenis_pelayanan');
        $pelayanan->harga = $request->get('harga');
        $pelayanan->save();

        return redirect('pelayanan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(pelayanan $pelayanan)
    {
        return view('pelayanan/show', compact('pelayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelayanan $pelayanan)
    {
        return view('pelayanan/edit', compact('pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelayanan $pelayanan)
    {
        $request->validate([
            'jenis_pelayanan' => 'required',
            'harga' => 'required',
        ]);
        $pelayanan->jenis_pelayanan = $request->get('jenis_pelayanan');
        $pelayanan->harga = $request->get('harga');
        $pelayanan->save();
        return redirect('pelayanan')->with('status', 'data berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelayanan $pelayanan)
    {
        $pelayanan->delete();
        return redirect('pelayanan')->with('status', 'data berhasil dihapus!');
    }
}
