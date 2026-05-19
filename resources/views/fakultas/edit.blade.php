@extends('main')
@section('title', 'Edit Fakultas')
@section('content')

        <form action="{{ route('fakultas.update', $fakultas->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class= "form-group">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama') ?? $fakultas->nama }}">
                @error("nama")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="singkatan" class="form-label">Singkatan</label>
                <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') ?? $fakultas->singkatan }}">
                 @error("singkatan")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="dekan" class="form-label">Nama Dekan</label>
                <input type="text" class="form-control" name="dekan"  value="{{ old('dekan') ?? $fakultas->dekan }}">
                @error("dekan")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
                
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

@endsection