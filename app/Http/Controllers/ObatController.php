<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat  = obat::all();
        return view('obat/index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = obat::all();
        return view('obat.create', compact('obat'));
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
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'stock' => 'required',
            'harga' => 'required',

        ]);
        $obat = new obat;
        $obat->nama_obat = $request->get('nama_obat');
        $obat->jenis_obat = $request->get('jenis_obat');
        $obat->stock = $request->get('stock');
        $obat->harga = $request->get('harga');
        $obat->save();

        return redirect('obat')->with('status', 'data berhasil ditambah!');

    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        return view('obat/show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(obat $obat)
    {
        return view('obat/edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obat $obat)
    {
        $request->validate([
            'obat' => 'required'
        ]);
        $obat->obat = $request->get('nama_obat');
        $obat->obat = $request->get('jenis_obat');
        $obat->obat = $request->get('stock');
        $obat->obat = $request->get('harga');
        $jenishewan->save();
        return redirect('obats')->with('status', 'data berhasil update!');
       

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(obats $obat)
    {
        $obat->delete();
        return redirect('obat')->with('status', 'data berhasil dihapus!');
    }
}
