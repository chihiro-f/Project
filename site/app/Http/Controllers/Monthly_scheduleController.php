<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Monthly_schedule;
use App\Http\Requests\Monthly_scheduleRequest;
use Illuminate\Http\Request;

class Monthly_scheduleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function show(Monthly_schedule $monthly_schedule){
        return view('Monthly_schedule.show')->with([ 'monthly_schedules' => $monthly_schedule ]);
    }
    
    public function store(Today_scheduleRequest $request, Today_schedule $today_schedule){
        $input = $request['today_schedule'];
        $today_schedule->fill($input)->save();
        return redirect('/today/' . $today_schedule->id);
    }
    
    public function edit(Monthly_schedule $monthly_schedule){
        return view('Monthly_schedule.edit')->with(['monthly_schedule' => $monthly_schedule]);
    }

    public function update(Request $request, Monthly_schedule $monthly_schedule){
        $input_monthly = $request['monthly_schedule'];
        $monthly_schedule->fill($input_monthly)->save();
        return redirect('/monthly_schedule/' . $monthly_schedule->id);
    }
}
