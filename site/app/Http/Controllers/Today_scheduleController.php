<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Today_schedule;
use App\Comment;
use App\Http\Requests\Today_scheduleRequest;
use Illuminate\Http\Request;

class Today_scheduleController extends Controller
{
    public function __construct() {
        $this->middleware('verified');
    }
    
    public function index(Today_schedule $today_schedule){
        
        return view('Today_schedule.index')->with([ 'today_schedules' => $today_schedule->getByLimit()]);
    }
    
    public function show(Today_schedule $today_schedule){
        $comment=Comment::where('today_schedule_id', $today_schedule->id)->get();
        $count=Comment::where('today_schedule_id', $today_schedule->id)->get()->count();

        return view('Today_schedule.show')->with(['today_schedules'=>$today_schedule])->with(['comments'=>$comment])->with(['count'=>$count]);
    }
    
    public function create(){
        return view('Today_schedule.create');
    }

    public function store(Today_scheduleRequest $request){
        $user=Auth::user();
        
        $today_schedule = new Today_schedule;
        $today_schedule->title = $request->input('today_schedule.title');
        $today_schedule->content = $request->input('today_schedule.content');
        $today_schedule->user_id = $user->id;
        $today_schedule->save();
        
        return redirect('/today/' . $today_schedule->id)->with('message','スケジュールの投稿が完了しました');
    }

    public function edit(Today_schedule $today_schedule){
        $user =auth()->user();
        if($user->can('update',$today_schedule)){
            return view('Today_schedule.edit')->with(['today_schedule'=>$today_schedule]);
        }else{
            return redirect('/today/'.$today_schedule->id)->with('message2','投稿者以外が編集することはできません');
        }
    }
    
    public function update(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        
        return redirect('/today/' .$today_schedule->id)->with('message','スケジュールの編集が完了しました');
    }
    
    public function delete(Today_schedule $today_schedule){
        $user =auth()->user();
        if($user->can('update',$today_schedule)){
            $today_schedule->delete();
            return redirect('/home');
        }else{
            return redirect('/today/'.$today_schedule->id)->with('message2','投稿者以外が削除することはできません');
        }
    }
}
