<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
}

