<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model fakultas
        $result = Fakultas::all(); // select * from fakultas
        // dd($result); //dump data
        // kirim data fakultas ke view
        //return view ('fakultas.index', with('fakultas', $result));
        //atau compact
        return view ('fakultas.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $input = $request->validate([
            'nama' => 'required|unique:fakultas',
            'singkatan' => 'required',
            'dekan' => 'required|max:30'
        ]);

        //simpan data ke tabel fakultas
        Fakultas::create($input);

        //redirect ke halaman index fakultas
        return redirect()-> route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        // $fakultas = Fakultas::find($fakultas);// select * from fakultas where id = $fakultas
        //dd($fakultas);
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        // dd($fakultas);
        // validasi data
        $input = $request->validate([
            'nama' => 'required|unique:fakultas,nama,' .
            $fakultas->id,// validasi nama(fakultas) harus unik di tabel fakultas kecuali data yang sedang diupdate
            'singkatan' => 'required',
            'dekan' => 'required'
        ]);
        // update data ke tabel fakultas
        $fakultas-> update($input);
        // redirect ke halaman index fakultas
        return redirect()->route('fakultas.index')->with('success',
        'Data fakultas berhasil diupdate'); //redirect ke halaman index fakultas dengan pesan success
    }

    /**
     * Remove the specified resource from storage.
     */         
    public function destroy(Fakultas $fakultas)
    {
        // $fakultas=Fakultas::find($fakultas);
        // dd($fakultas)
        $fakultas->delete(); // delete from fakultas where id = $fakultas->id
        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil dihapus'); //redirect ke halaman index fakultas
    }
}
    