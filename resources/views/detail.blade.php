@extends('master')
 
<!-- memberikan judul di tab sesuai dengan nama event yang sedang dibaca -->
@section('title')
{{ $event->nama }}
@endsection
 
<!-- menampilkan detail nama, tanggal, speaker, dan deskripsi event -->
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <div class="p-4">
        <h1>{{ $event->nama }}</h1> <br> <br>
        <h4>Tanggal : {{ $event->tanggal }}</h4>
        <h4>Speaker : {{ $event->speaker }}</h4>
        <h4>Deskripsi : </h4>
        <p>{{ $event->deskripsi }}</p>
    </div>
</div>
@endsection
 
<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
   <center> 
        <a href="/"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
    </center>
</div>
@endsection