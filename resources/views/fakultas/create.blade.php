@extends('main')
@section('title', 'Tambah Fakultas')
@section('content')

        <form action="{{ route('fakultas.store') }}" method="post">
            @csrf
            <div class= "form-group">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                @error("nama")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="singkatan" class="form-label">Singkatan</label>
                <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                @error("singkatan")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="dekan" class="form-label">Nama Dekan</label>
                <input type="text" class="form-control" name="dekan"  value="{{ old('dekan') }}">
                @error("dekan")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
                
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

@endsection