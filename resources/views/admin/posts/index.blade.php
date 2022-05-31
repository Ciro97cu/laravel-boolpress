@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-between">
    <div class="col-auto">
        <h1>Tutti i posts</h1>
    </div>
    <div class="col-auto">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crea nuovo post</a>
    </div>
</div>
<table class="table border-top border-bottom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Slug</th>
            <th class="text/center">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    <a href="">Dettaglio</a>
                    <a href="">Modifica</a>
                    <a href="">Elimina</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection