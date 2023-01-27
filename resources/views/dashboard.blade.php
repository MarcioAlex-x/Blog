@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="col-12">
        <h1 class="text-center">
            Painel
        </h1>
        @if (session('msg'))
            <p class="text-center text-light bg-success p-2">{{session('msg')}}</p>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <th scope="row">{{$post->titulo}}</th>
                        
                        <th scope="row"><img src="/images/posts/{{$post->imagem}}" style="width: 100px"> </th>
                        <th scope="row" class="text-center">
                            <a href="/editar/{{$post->id}}" class="btn btn-info mb-3">Editar</a>
                            <form action="/deletar/{{$post->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Deletar
                                </button>
                            </form>
                        </th>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
