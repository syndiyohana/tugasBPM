@extends('master')
 
<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Artikel')
 
@section('header')
<center class="mt-4">
    <h2>Edit Artikel</h2>
</center>
@endsection
 
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    @csrf
	<input type="hidden" value="{{ $event->id }}" name="id">
        <div class="form-group">
            <label>Nama Event</label>
            <input type="text" class="form-control" value="{{ $event->nama }}" name="nama" placeholder="Nama Event">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" value="{{ $event->tanggal }}" name="tanggal" placeholder="dd-mm-yyyy">
        </div>
        <div class="form-group">
            <label>Speaker</label>
            <input type="text" class="form-control" value="{{ $event->speaker }}" name="speaker" placeholder="Speaker">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="15">{{ $event->deskripsi }}
            </textarea>
        </div>
        <!-- <div class= "form-group">
        <input type="submit" class="form-control btn btn-primary" value="Save">
    </div> -->
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:80px !important">
    <div class= "form-group">
        <input type="submit" class="form-control btn btn-primary" value="Save">
    </div>
</div>
</form>
@endsection