<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Categories')
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="POST" action="/create_process">
    @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>User Id</label>
            <input type="number" class="form-control" name="user_id">
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
</div>
</form>
@endsection