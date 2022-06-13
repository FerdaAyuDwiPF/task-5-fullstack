@extends('master')
 
@section('title', 'Blog Investree')

@section('content')
@extends('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

    <center>
        <h2>Blog Investree</h2>
        <a href="/add"><button class="btn btn-success">Add New Article</button></a>
        <a href="/create"><button class="btn btn-success">Add New Categories</button></a>
    </center>
@endsection
 
@section('main')
    @foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <img src="{{ asset('images/' . $article->image) }}" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <a href="/detail/{{ $article->id }}" class="btn btn-primary">Read Article</a>
                <a href="/edit/{{ $article->id }}"><button class="btn btn-success">Edit</button></a>
                <a href="/delete/{{ $article->id }}"><button class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
   @endforeach
@endsection