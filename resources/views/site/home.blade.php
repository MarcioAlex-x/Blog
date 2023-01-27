@extends('layouts.main')
@section('content')
    @section('title','Alex Freitas - Home')
    
    <div class="container rounded my-5">
       
        <div class="row">
            
            <div class="col ">
                <p class="display-1 text-center">
                    <video src="/images/banner.mp4" class="w-100" autoplay loop></video>
                </p>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="col-4 offset-4">
            <form action="/" method="GET" class="form-group">
                <input type="text" name="buscar" class="form-control mb-5" placeholder="Buscar no blog">
               
            </form>
        </div>
    </div>
    
    
    @if(session('msg'))
        <p class="text-light text-center w-100 bg-success p-3">{{session('msg')}}</p>
    @endif
    <div class="container">
        <div class=" row">
    @if ($buscar)
        <h2>Buscando por: {{$buscar}}</h2> 
    @endif
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 order-lg-1 order-md-1 order-sm-2 order-2">
                <div class="row">
                    @foreach ($posts as $post)
                     <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-2">
                        <div class="card" >
                            <img src="/images/posts/{{$post->imagem}}" class="card-img-top img-fluid" alt="imagem do post {{$post->titulo}}" style="height: 250px;">
                            <div class="card-body">
                              <h5 class="card-title" style="height: 100px">{{$post->titulo}}</h5>
                              <p class="card-text overflow-hidden" style="height: 200px">{{$post->conteudo}}</p>
                              <a href="/post/{{$post->id}}" >Saiba mais</a>
                            </div>
                        </div>
                    </div>   
                    @endforeach
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 order-lg-2 order-md-2 overflow-hidden order-sm-1 order-1 rounded p-4" style="height: 600px;">
                <h5 class="text-center mb-5  p-5 rounded" style=" background:#d9d9d9">
                    Últimos posts do Blog    
                </h5> 
                @foreach ($posts as $post)
                    <p class="text-center text-uppercase text-dark"><a href="/post/{{$post->id}}">{{$post->titulo}}</a></p>
                    
                @endforeach   
            </div>                                  
        </div>
    </div>
@endsection