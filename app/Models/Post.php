<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\GerenciamentoController;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'conteudo',
        'imagem'
    ];
    protected $guarded = [];
}
