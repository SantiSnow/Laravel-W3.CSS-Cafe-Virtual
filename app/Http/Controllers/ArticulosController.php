<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class ArticulosController extends Controller
{
    public function articulos(){
        $user = Auth::user();
        
        $articles = Article::where('clasification_id', 1)->orderBy('id', 'desc')->paginate(8);
        
        return view('articulos', [
            'articles' => $articles,
            'user' => $user,
        ]);
    }

}
