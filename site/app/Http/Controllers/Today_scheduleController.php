<?php

namespace App\Http\Controllers;

use App\Today_schedule;
use App\Http\Requests\Today_scheduleRequest;
use Illuminate\Http\Request;

class Today_scheduleController extends Controller
{
    public function index(Today_schedule $today_schedule){
        return view('Today_schedule.index')->with([ 'today_schedules' => $today_schedule->getByLimit()]);
    }
    
    public function show(Today_schedule $today_schedule){
        return view('Today_schedule.show')->with(['today_schedules'=>$today_schedule]);
        //変数名=>値
    }
    public function create(){
        return view('Today_schedule.create');
    }

    public function store(Request $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        return redirect('/today/' . $today_schedule->id);
    }

    public function edit(Today_schedule $today_schedule){
        return view('Today_schedule.edit')->with(['today_schedule'=>$today_schedule]);
    }
    
    public function update(Request $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        return redirect('/today/' .$today_schedule->id);
    }
}
