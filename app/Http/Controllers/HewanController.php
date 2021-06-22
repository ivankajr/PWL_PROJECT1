<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Pemilik;
use App\Models\Jenishewan;
use Illuminate\Http\Request;
use PDF;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewan = Hewan::all();
        return view('hewan/index', compact('hewan'));
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
        return view('hewan.create', compact('pemilik','jenishewan'));
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
            'image' => 'required'
        ]);
        $image_name = "";
        if($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $hewan = new Hewan;
        $hewan->pemilik_id = $request->get('pemilik_id');
        $hewan->jenishewan_id = $request->get('jenishewan_id');
        $hewan->nama_hewan = $request->get('nama_hewan');
        $hewan->jenis_kelamin = $request->get('jenis_kelamin');
        $hewan->spesies = $request->get('spesies');
        $hewan->foto = $image_name;
        $hewan->save();

        return redirect('hewan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function show(Hewan $hewan)
    {
        // return $hewan;
        return view('hewan/show', compact('hewan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function edit(Hewan $hewan)
    {
        $pemilik = Pemilik::all();
        $jenishewan = Jenishewan::all();
        return view('hewan/edit', compact('hewan', 'pemilik', 'jenishewan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hewan $hewan)
    {
        $request->validate([
            'pemilik_id' => 'required',
            'jenishewan_id' => 'required',
            'nama_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'spesies' => 'required',
        ]);
        if($hewan->foto && file_exists('app/public/' . $hewan->foto)) {
            \Storage::delete('public/' . $hewan->foto);
        }
        $hewan->pemilik_id = $request->get('pemilik_id');
        $hewan->jenishewan_id = $request->get('jenishewan_id');
        $hewan->nama_hewan = $request->get('nama_hewan');
        $hewan->jenis_kelamin = $request->get('jenis_kelamin');
        $hewan->spesies = $request->get('spesies');
        $image_name = $request->file('image')->store('images', 'public');
        $hewan->foto = $image_name;
        $hewan->save();

        return redirect('hewan')->with('status', 'data berhasil update!');
    }
    public function cetak_data(){
        $hewan = Hewan::all();
        $pdf = PDF::loadview('hewan.hewan_pdf',['hewan'=>$hewan]);
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hewan  $hewan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hewan $hewan)
    {
        $hewan->delete();
        return redirect('hewan')->with('status', 'data berhasil dihapus!');
    }
}
