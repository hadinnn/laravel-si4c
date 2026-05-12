@extends('main')
@section('title', 'Tambah Periode')
@section('content')
    <form action="{{ route('periode.store') }}" method="post">
        @csrf
            <div class= "form-group">
                <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
                <input type="text" class="form-control" name="tahun_akademik" value="{{ old('tahun_akademik') }}">
                @error("tahun_akademik")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class= "form-group">
                <label for="kode_set" class="form-label">Kode Semester</label>
                <input type="text" class="form-control" name="kode_set" value="{{ old('kode_set') }}">
                @error("kode_set")
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection