<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Today_schedule;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Comment $comment, Today_schedule $today_schedule){
        return view('Network.show')->with(['comments' => $comment->get()]);  
    }
    
    public function store(Request $request){
        $user=Auth::user();
 
        $comment = new Comment;
        $comment->content = $request->input('comment.content');
        $comment->today_schedule_id = $request->input('comment.today_schedule');
        // dd($comment->today_schedule_id);
        $comment->user_id = $user->id;
        $comment->save();
        
        //ルーティング
        return redirect('/today/' . $comment->today_schedule_id);
        //->with('commentstatus','コメントを投稿しました');
    }
}
