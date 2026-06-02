<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // DB::table('mahasiswas')
        //Grafik 1 - per Program Studi
        $jumlahMahasiswa = DB::select('SELECT p.nama_prodi, count(*) as
        jumlah
        FROM laravelsi4c.mahasiswas m
        join laravelsi4c.prodis p
        on m.prodi_id = p.id
        GROUP BY p.nama_prodi');
        // Grafik 2 — per Tahun Angkatan
        $grafik_angkatan = DB::select("select left(m.npm,2) as Tahun_Angkatan, count(*) as jumlah
        from laravelsi4c.mahasiswas m
        group by left(m.npm,2)");
        return view('dashboard', compact('jumlahMahasiswa', 'grafik_angkatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
