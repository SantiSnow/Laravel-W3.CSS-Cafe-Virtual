<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class LibrosController extends Controller
{
    public function libros(){
        $user = Auth::user();
        
        $articles = Article::where('clasification_id', 2)->orderBy('id', 'desc')->paginate(8);
        
        return view('libros', [
            'articles' => $articles,
            'user' => $user,
        ]);
    }
}
