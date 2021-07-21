<?php

namespace App\Http\Controllers;

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
}
