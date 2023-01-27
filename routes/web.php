<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/post/{id}',[HomeController::class,'show'])->name('post');

Route::get('/admin',[PostController::class,'index'])->name('admin');
Route::post('/criar',[PostController::class,'store'])->name('criar.post');
Route::put( '/editar',[PostController::class,'update'])->name('editar.post');
Route::delete('/deletar/{id}',[Postcontroller::class,'destroy'])->middleware('auth');
Route::get('/editar/{id}',[PostController::class,'edit'])->middleware('auth');
Route::put('/update/{id}',[PostController::class,'update'])->middleware('auth');


Route::get('/dashboard',[PostController::class,'dashboard'])->middleware('auth');


