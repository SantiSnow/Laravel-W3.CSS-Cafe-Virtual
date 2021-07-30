<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BuscadorController extends Controller
{
    public function buscar(Request $request){
        $palabra_buscada = $request->get('busqueda');
        $articles = Article::where('description', 'like', "%". $palabra_buscada . "%")->paginate(8);
        return view('busqueda', compact('articles'));
    }
}
