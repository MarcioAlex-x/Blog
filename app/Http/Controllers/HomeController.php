<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $buscar = request('buscar');
        if($buscar){
            $posts = Post::where([
                ['titulo','like' , '%'.$buscar.'%']
            ])->get();
        }else{
            $posts = Post::orderBy('id','desc')->get();            
        }
        
        return view('site.home',[
            'posts' => $posts,
            'buscar' => $buscar
        ]);
    }
    
    public function show($id){
        $post = Post::findOrFail($id);
        return view('site.post',[
            'post'=>$post
        ]);
    }
}
