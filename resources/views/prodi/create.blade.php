@extends('main')
@section('title', 'Tambah Program Studi')
@section('content')
        <form action="{{ route('prodi.store') }}" method="post">
            @csrf
            <div class= "form-group">
                <label for="nama_prodi" class="form-label">Nama Program Studi</label>
                <input type="text" class="form-control" name="nama_prodi" value="{{ old('nama_prodi') }}">
                @error("nama_prodi")
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
                <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" class="form-control" name="kaprodi"  value="{{ old('kaprodi') }}">
                @error("kaprodi")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="fakultas_id" class="form-label">Fakultas</label>
                <select class="form-control" name="fakultas_id">
                    <option value="">--Pilih Fakultas--</option>
                    @foreach($fakultas as $f)
                        <option value="{{ $f->id }}" {{ old('fakultas_id') == $f->id ? 'selected' : '' }}>{{ $f->nama }}</option>
                    @endforeach
                </select>
                @error("fakultas_id")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
                
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

@endsection