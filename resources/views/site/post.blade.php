@extends('layouts.main')
@section('content')
@section('title', 'Alex Freitas'.'-'.$post->titulo)
    
    <div class="container">
        <div class="row text-center">
            <h3 class="text-center mt-5">{{$post->titulo}}</h3>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2 p-3 mt-3 shadow rounded">
                <img src="/images/posts/{{$post->imagem}}" alt="imagem da postagem {{$post->titulo}}" class="img-fluid rounded border" style="width: 400px">
                
                <p class="text-center p-3 mt-4">
                    {{$post->conteudo}}
                </p>
               
            </div>
            <div class="col-lg-3 col-md-9 col-sm-12 col-12 order-lg-2 order-md-2.order-sm-1.order-1 p-3 mt-3 shadow rounded">
                <p class="mt-3 p-2">Espaço para ADS</p>
            </div>
        </div>
    </div>

@endsection