@extends('main')
@section('title', 'Program Studi')
@section('content')
<a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah Program Studi</a>
<h1>Data Program Studi</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>
    @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama ?? '-' }}</td>
    </tr>
    @endforeach
</table>
    
@endsection