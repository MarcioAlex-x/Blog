@extends('layouts.main')
@section('content')
@section('title','Criar Post')

<div class="container border p-5 shadow rounded mt-5">
    <form action="/criar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control">
            
            <label class="form-label">Conteúdo</label>
            <textarea name="conteudo" class="form-control"></textarea>
            <label class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control">
            <button type="submit" class="btn btn-primary mt-4">Salvar</button>
        </div>
    </form>
</div>
    
@endsection