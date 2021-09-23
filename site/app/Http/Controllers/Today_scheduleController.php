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
        $this->middleware('auth');
    }
    
    public function index(Today_schedule $today_schedule){
        return view('Today_schedule.index')->with([ 'today_schedules' => $today_schedule->getByLimit()]);
    }
    
    public function show(Today_schedule $today_schedule){
        $comment=Comment::where('today_schedule_id', $today_schedule->id)->get();
        $count=Comment::where('today_schedule_id', $today_schedule->id)->get()->count();
        // dd($count);

        //変数名=>値
        return view('Today_schedule.show')->with(['today_schedules'=>$today_schedule])->with(['comments'=>$comment])->with(['count'=>$count]);
    }
    
    public function create(){
        return view('Today_schedule.create');
    }

    public function store(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        
        return redirect('/today/' . $today_schedule->id);
    }

    public function edit(Today_schedule $today_schedule){
        return view('Today_schedule.edit')->with(['today_schedule'=>$today_schedule]);
    }
    
    public function update(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        return redirect('/today/' .$today_schedule->id);
    }
}
