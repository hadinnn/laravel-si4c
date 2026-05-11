@extends('main')
@section('title', 'Fakultas')
@section('content') 
<h1>Data Fakultas</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>Nama Fakultas</th>
        <th>Singkatan</th>
        <th>Dekan</th>
    </tr>

    @foreach($result as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->singkatan }}</td>
        <td>{{ $item->dekan }}</td>
    </tr>
    @endforeach
</table>
@endsection
