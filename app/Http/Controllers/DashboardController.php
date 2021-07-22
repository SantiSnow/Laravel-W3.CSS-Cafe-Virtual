<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard () {
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        return view('admin.home');
    }

    public function todasLasObras(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $articulos = Article::all();
        return view('admin.todasLasObras', compact('articulos'));
    }

    public function getLibros(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $articulos = Article::where('clasification_id', 2)->get();
        return view('admin.libros', compact('articulos'));
    }

    public function getArticulos(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $articulos = Article::where('clasification_id', 1)->get();
        return view('admin.articulos', compact('articulos'));
    }

    public function librosEliminados(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $articulos = Article::onlyTrashed()->get();
        return view('admin.libros-eliminados', compact('articulos'));
    }
}
