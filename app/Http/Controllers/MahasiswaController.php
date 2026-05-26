<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();//untuk liat dropdown prodi
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswas,npm', // npm harus unik di tabel mahasiswas
            'nama' => 'required',
            'prodi_id' => 'required|exists:prodis,id', // prodi_id harus ada di tabel prodis
            'foto' => 'nullable|image|max:2048' // optional foto, max 2MB
        ]);

        //upload file foto jika ada
        if ($request->hasFile('foto')) {
            // rename file dengan npm untuk menghindari duplikasi nama
            $filename = $input['npm'] . '.' . $request->file('foto')->getClientOriginalExtension();
            // simpan foto di storage/app/public/fotos
            $input['foto'] = $request->file('foto')->storeAs('fotos', $filename, 'public');
        } else {
            $input['foto'] = null; // set foto ke null jika tidak ada file yang diupload
        }

        //simpan data ke tabel mahasiswa
        Mahasiswa::create($input);

        //redirect ke halaman index dengan pesan suklses
        return redirect()-> route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::all();//untuk liat dropdown prodi
        return view('mahasiswa.edit', compact('mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {   
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
