@extends('layouts.main')
@section('content')
@section('title','Editar' . $post->titulo)

<h1 class="text-center">Editando {{$post->titulo}}</h1>

<div class="container border p-5 shadow rounded mt-5">
    <form action="/admin/editar/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="text-center"><img src="/images/posts/{{$post->imagem}}" alt="{{$post->titulo}}" class="img-thumbnail mb-3" style="width: 300px"></div>
        <div class="form-group">
            
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{$post->titulo}}">
            
            <label class="form-label">Conteúdo</label>
            <textarea name="conteudo" class="form-control">
            {{$post->conteudo}}
            </textarea>
            <label class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control">
            <button type="submit" class="btn btn-primary mt-4">Editar</button>
        </div>
    </form>
</div>
    
@endsection