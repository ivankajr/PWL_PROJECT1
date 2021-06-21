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
            'image' => 'required'

        ]);
        $image_name = "";
        if($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $obat = new obat;
        $obat->nama_obat = $request->get('nama_obat');
        $obat->jenis_obat = $request->get('jenis_obat');
        $obat->stock = $request->get('stock');
        $obat->harga = $request->get('harga');
        $obat->foto = $image_name;
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
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'stock' => 'required',
            'harga' => 'required',
        ]);
        if($obat->foto && file_exists('app/public/' . $obat->foto)) {
            \Storage::delete('public/' . $obat->foto);
        }
        $obat->nama_obat = $request->get('nama_obat');
        $obat->jenis_obat = $request->get('jenis_obat');
        $obat->stock = $request->get('stock');
        $obat->harga = $request->get('harga');
        $image_name = $request->file('image')->store('images', 'public');
        $obat->foto = $image_name;
        $obat->save();
        return redirect('obat')->with('status', 'data berhasil update!');
       

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(obat $obat)
    {
        $obat->delete();
        return redirect('obat')->with('status', 'data berhasil dihapus!');
    }
}
