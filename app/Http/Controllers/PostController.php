<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{   
    public function index(){
        return view('admin.criar');
    }

    public function store(Request $request){
        $post = new Post;
        $post->titulo = $request->titulo;
        $post->conteudo = $request->conteudo;
        $post->imagem = $request->imagem;
        //UPLOAD DA IMAGEM
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName().strtotime('now').'.'.$extension);
            $request->imagem->move(public_path('images/posts'),$imagemNome);
            $post->imagem=$imagemNome;
        }

        $post->save();
        return redirect ('/')->with('msg','Post adicionado com sucesso!');

    }
    public function dashboard(){
        
        $posts = Post::all();
        return view('dashboard',[
            'posts' => $posts
        ]);
    }
    public function destroy($id){
        Post::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg','Post excluído com sucesso');
    }
    public function edit($id){
        $post = Post::findOrFail($id);

        return view('admin.editar', [
            'post'=>$post
        ]);
    }
    public function update(Request $request){
        Post::findOrFail($id)->update($request->all());
        
        return redirect('/dashboard')->with('msg','Post editado com sucesso');
    }
    
    
}


