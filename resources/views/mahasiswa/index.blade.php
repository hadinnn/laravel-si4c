@extends('main')
@section('title', 'Mahasiswa')
@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <h1>Data Mahasiswa</h1>
    <table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Program Studi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach($mahasiswas as $key => $mahasiswa)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->npm }}</td>
        <td>{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
        <td>
            @if($mahasiswa->foto)
                <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto" width="50">
            @else
                <span class="text-muted">Tidak ada foto</span>
            @endif
        </td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-xs btn-warning btn-rounded">Edit</a>
            <form method="POST" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                    title='Delete' data-nama='{{ $mahasiswa->nama }}'>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection