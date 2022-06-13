@extends('master')
 
<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Article')
 
@section('header')
<center class="mt-4">
    <h2>Edit Article</h2>
</center>
@endsection
 
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="POST" action="/edit_process">
    @csrf
	<input type="hidden" value="{{ $article->id }}" name="id">
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" value="{{$article->title}}" name="title" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea class="form-control" name="content" rows="15">{{ $article->content}}
            </textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" value="{{$article->image}}" name="image">
        </div>
        <div class="form-group">
            <label>User Id</label>
            <input type="number" class="form-control" value="{{$article->user_id}}" name="user_id">
        </div>
        <div class="form-group">
            <label>Category Id</label>
            <input type="number" class="form-control" value="{{$article->category_id}}" name="category_id">
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Edit</label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
@endsection