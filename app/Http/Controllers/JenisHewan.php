<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenishewan as jenishewans;

class JenisHewan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenishewan = jenishewans::all();
        return view('jenishewan/index', compact('jenishewan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenishewan = jenishewans::all();
        return view('jenishewan.create', compact('jenishewan'));
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
            'jenis_hewan' => 'required'
        ]);

        $jenishewan = new jenishewans;
        $jenishewan->jenis_hewan = $request->get('jenis_hewan');
        $jenishewan->save();

        return redirect('jenishewan')->with('status', 'data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(jenishewans $jenishewan)
    {
        return view('jenishewan/show', compact('jenishewan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenishewans $jenishewan)
    {
        // $jenishewan = Jenishewans::all();
        return view('jenishewan/edit', compact('jenishewan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenishewans $jenishewan)
    {
        $request->validate([
            'jenis_hewan' => 'required'
        ]);
        $jenishewan->jenis_hewan = $request->get('jenis_hewan');
        $jenishewan->save();

        return redirect('jenishewan')->with('status', 'data berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenishewans $jenishewan)
    {
        $jenishewan->delete();
        return redirect('jenishewan')->with('status', 'data berhasil dihapus!');
    }
}
