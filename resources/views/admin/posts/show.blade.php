@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-between">
    <div class="col-auto">
        <h1>Visualizzazione post {{$post->id}}</h1>
    </div>
    <div class="col-auto">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Tutti i post</a>
    </div>
</div>
<div>
    <h3>Titolo</h3>
    <p>{{$post->title}}</p>
    <h3>Slug</h3>
    <p>{{$post->slug}}</p>
    <h3>Contenuto</h3>
    <p>{{$post->content}}</p>
    <a class="btn btn-warning" href="{{ route("admin.posts.edit", $post->id) }}">Modifica</a>
    <a class="btn btn-danger" href="">Elimina</a>
</div>
@endsection