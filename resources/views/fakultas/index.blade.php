@extends('main')
@section('title', 'Fakultas')
@section('content')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <h1>Data Fakultas</h1>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
            <th>Dekan</th>
            <th>Aksi</th>
        </tr>

        @foreach($result as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->singkatan }}</td>
                <td>{{ $item->dekan }}</td>
                <td>
                    <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-xs btn-warning btn-rounded">Edit</a>
                    <form method="POST" action="{{ route('fakultas.destroy', $item->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $item->nama }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection