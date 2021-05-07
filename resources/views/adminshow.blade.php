<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')
 
@section('header')
<h2><center>List Event</center></h2>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
    </div>
    @endif
 
@endsection
 
@section('title', 'Halaman Admin')
 
@section('main')
    <div class="col-md-12 bg-white p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Event</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped" style="text-align:center;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Speaker</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $i => $event)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $event->nama }}</td>
                        <td>{{ $event->tanggal }}</td>
                        <td>{{ $event->speaker }}</td>
                        <td>
                            <a href="/edit/{{ $event->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $event->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <a href="/"><button class="btn btn-primary mb-3">Kembali</button></a>
        </table>
    </div>
@endsection