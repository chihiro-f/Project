<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Comment $comment){
        return view('Network.show')->with(['comments' => $comment->get()]);  
    }
}
