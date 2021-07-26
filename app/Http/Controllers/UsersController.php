<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function getUsers(){
        $user = Auth::user();
        if($user->role_id != 1){
            return redirect('/');
        }
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}
