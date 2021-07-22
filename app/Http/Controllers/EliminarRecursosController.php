<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class EliminarRecursosController extends Controller
{
    public function eliminarLibro(Request $request){
        $idArticulo = $request->id;
        $articulo = Article::find($idArticulo);
        $articulo->delete();
        return redirect('/admin-libros');
    }

    public function restaurarLibro(Request $request){
        $idArticulo = $request->id;
        $articulo = Article::withTrashed()->where('id', $idArticulo)->first();
        $articulo->restore();
        return redirect('/admin-libros');
    }
}
