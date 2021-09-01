<?php

namespace App\Http\Controllers;

use App\Today_schedule;
// use Illuminate\Http\Request;
use App\Http\Requests\Today_scheduleRequest;

class Today_scheduleController extends Controller
{
    //
    public function show(Today_schedule $today_schedule){
        return view('Today_schedule.show')->with(['today_schedules'=>$today_schedule]);
        //変数名=>値
    }
    public function create(){
        return view('Today_schedule.create');
    }

    public function store(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input->$request['today_schedule'];
        $today_schedule->fill($input)->save();
        return redirect('/today/'.$today_schedule->id);
    }

    public function edit(Today_schedule $today_schedule){
        return view('Today_schedule.edit')->with(['today_schedule' => $today_schedule]);
    }

    public function update(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input_today = $request['today_schedule'];
        $today_schedule->fill($input_today)->save();

        return redirect('/today/'.$today_schedule->id);
    }
}
