<h2>Data Berita</h2>
@foreach ($result as $item)
    {{ $item->Judul }} - {{ $item->Deskripsi }} <br/>
@endforeach