<?php

namespace App\Http\Controllers;


use App\Models\Pemilik as pemiliks;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        $pemilik = pemiliks::all();
        return view('pemilik/index', compact('pemilik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = pemiliks::all();
        return view('pemilik.create', compact('pemilik'));
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
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $pemilik = new Pemiliks();
        $pemilik->nama_pemilik = $request->get('nama_pemilik');
        $pemilik->jenis_kelamin = $request->get('jenis_kelamin');
        $pemilik->alamat = $request->get('alamat');
        $pemilik->no_telp = $request->get('no_telp');
        $pemilik->save();

        return redirect('pemilik')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemiliks $pemilik)
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
    public function edit(Pemiliks $pemilik)
    {
        return view('pemilik/edit', compact('pemilik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemiliks $pemilik)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        $pemilik->nama_pemilik = $request->get('nama_pemilik');
        $pemilik->jenis_kelamin = $request->get('jenis_kelamin');
        $pemilik->alamat = $request->get('alamat');
        $pemilik->no_telp = $request->get('no_telp');
        $pemilik->save();

        return redirect('pemilik')->with('status', 'data berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemiliks $pemilik)
    {
        $pemilik->delete();
        return redirect('pemilik')->with('status', 'data berhasil dihapus!');
    }
}

