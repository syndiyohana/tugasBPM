<!-- menggunakan kerangka dari halaman master.blade.php --> 
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Event BPM')
 
<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
    <center>
        <h2>Event Bonapasogit Mengajar</h2>
        <a href="/add"><button class="btn btn-success">Tambah Event</button></a>
        <a href="/admin"><button class="btn btn-success">Admin page</button></a>
    </center>
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
    @foreach ($event as $event)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <div class="card-body">
            <center>
                <h5 class="card-title">{{ $event->nama }}</h5>
                <h5 class="card-title">{{ $event->tanggal }}</h5>
                <a href="/detail/{{ $event->id }}" class="btn btn-primary">Detail Event</a>
            </center>
            </div>
        </div>
    </div>
   @endforeach
@endsection