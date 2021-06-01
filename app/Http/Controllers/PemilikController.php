<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Pemilik;
use App\Models\Jenishewan;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        $hewan = Hewan::all();
        return view('pemilik/index', compact('pemilik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = Pemilik::all();
        $jenishewan = Jenishewan::all();
        return view('pemilik.create', compact('pemilik','jenishewan'));
        // return view('hewan.create', compact('jenishewan'));
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
            'jenishewan_id' => 'required',
            'nama_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'spesies' => 'required',
        ]);

        $pemilik = new Pemilik();
        $pemilik->pemilik_id = $request->get('pemilik_id');
        $pemilik->jenishewan_id = $request->get('jenishewan_id');
        $pemilik->nama_hewan = $request->get('nama_hewan');
        $pemilik->jenis_kelamin = $request->get('jenis_kelamin');
        $pemilik->spesies = $request->get('spesies');
        $pemilik->save();

        return redirect('hewan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilik $pemilik)
    {
        // return $hewan;
        return view('pemilik/show', compact('pemilik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemilik $pemilik)
    {
        $pemilik = Pemilik::all();
        $jenishewan = Jenishewan::all();
        return view('pemilik/edit', compact('hewan', 'pemilik', 'jenishewan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemilik $pemilik)
    {
        $request->validate([
            'pemilik_id' => 'required',
            'jenishewan_id' => 'required',
            'nama_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'spesies' => 'required',
        ]);
        $pemilik->pemilik_id = $request->get('pemilik_id');
        $pemilik->jenishewan_id = $request->get('jenishewan_id');
        $pemilik->nama_hewan = $request->get('nama_hewan');
        $pemilik->jenis_kelamin = $request->get('jenis_kelamin');
        $pemilik->spesies = $request->get('spesies');
        $pemilik->save();

        return redirect('hewan')->with('status', 'data berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hewan $hewan)
    {
        //
    }
}

