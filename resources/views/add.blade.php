<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Event')
 
<!-- membuat komponen main yang berisi form untuk mengisi nama, tanggal, speaker, dan deskripsi event -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Nama Event</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Event">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="dd/mm/yy">
        </div>
        <div class="form-group">
            <label>Speaker</label>
            <input type="text" class="form-control" name="speaker" placeholder="Speaker">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="15"></textarea>
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar (side di sebelah kanan) yang berisi tombol untuk upload event-->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:80px !important">
    <div class="form-group">
        <input type="submit" class="form-control btn btn-primary" value="Save">
    </div>
</div>
</form>
@endsection