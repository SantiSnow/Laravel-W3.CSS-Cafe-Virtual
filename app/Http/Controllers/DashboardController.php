<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Genre;
use App\Models\Clasification;
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
        $clasif = Clasification::all();
        $articulos = Article::where('clasification_id', 2)->get();
        return view('admin.libros', compact('articulos'), compact('clasif'));
    }

    public function getArticulos(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $clasif = Clasification::all();
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

    public function getGeneros(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $genres = Genre::all();
        return view('admin.generos', compact('genres'));
    }

    public function nuevoLibro(Request $request){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }

        $imageName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public', $imageName);
        $extension = $request->file('image')->extension();

        $pdfName = $request->file('pdf')->getClientOriginalName();
        $pdf = $request->file('pdf')->storeAs('public', $pdfName);
        $extension = $request->file('image')->extension();

        $libro = new Article();

        $libro->title = $request->get('title');
        $libro->author = $request->get('author');
        $libro->description = $request->get('description');
        $libro->content = $request->get('content');
        $libro->image = $imageName;
        $libro->pdf = $pdfName;
        $libro->pages = $request->get('pages');
        $libro->genre_id = $request->get('genre_id');
        $libro->clasification_id = $request->get('clasification_id');
        
        $libro->save();

        return redirect('/admin-libros');
    }
}
