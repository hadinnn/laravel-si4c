@extends('main')
@section('title', 'Mahasiswa')
@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
<h1>Data Mahasiswa</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Program Studi</th>
        <th>Foto</th>
    </tr>
    @foreach($mahasiswas as $key => $mahasiswa)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->npm }}</td>
        <td>{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
        <td>
            @if($mahasiswa->foto)
                <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto" width="100">
            @else
                <p>Foto tidak tersedia</p>
            @endif
        </td>
    </tr>
    @endforeach
</table>
    
@endsection