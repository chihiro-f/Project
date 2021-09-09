<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
// use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('login')->with(['users' => $user->get()]);
    }
    
    public function show(User $user){
        return view('login')->with(['users'=> $user->get()]);
        //変数名=>値
    }
    
    public function login(User $user){
        return redirect('/home');
    }
}
?>