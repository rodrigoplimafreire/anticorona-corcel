<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Post;

class PostController extends Controller
{
    public function perguntas()
    {
        $retorno = Post::published()->taxonomy('category', 'perguntas')->get();
        return response()->json($retorno);
    }


    public function artigos()
    {
        $retorno = Post::published()->taxonomy('category', 'artigos')->get();
        return response()->json($retorno);
    }

    public function boletins()
    {
        $retorno = Post::published()->taxonomy('category', 'boletins-oficiais')->get();
        return response()->json($retorno);
    }

    public function treinamentos()
    {
        $retorno = Post::published()->taxonomy('category', 'treinamentos')->get();
        return response()->json($retorno);
    }

    public function guias()
    {
        $retorno = Post::published()->taxonomy('category', 'guias')->get();
        return response()->json($retorno);
    }
}
