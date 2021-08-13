<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        $user = Auth::user();
        $articles = Article::orderBy('id', 'desc')->paginate(8);
        return view('welcome', [
            'articles' => $articles,
            'user' => $user,
        ]);
    }

    public function articulo($id){
        $user = Auth::user();

        if($user == null){
            return redirect('/login');
        }

        $article = Article::find($id);
        
        return view('articulo', [
            'article' => $article,
            'user' => $user,
        ]);
    }

    public function generos(){
        $generos = Genre::all();
        return view('generos', compact('generos'));
    }

    public function genero($id){
        $articles = Article::where('genre_id', $id)->paginate(8);
        return view('genero', compact('articles'));
    }
}

