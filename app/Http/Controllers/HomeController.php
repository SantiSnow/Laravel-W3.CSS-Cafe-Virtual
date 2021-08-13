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
        $articles = Article::where('clasification_id', 1)->paginate(4);
        $ebooks = Article::where('clasification_id', 2)->paginate(4);
        return view('welcome', [
            'articles' => $articles,
            'ebooks' => $ebooks,
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

