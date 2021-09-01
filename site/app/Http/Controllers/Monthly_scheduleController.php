<?php

namespace App\Http\Controllers;

use App\Monthly_schedule;
// use Illuminate\Http\Request;
use App\Http\Requests\Monthly_scheduleRequest;

class Monthly_scheduleController extends Controller
{
    //
    // public function index(Monthly_schedule $monthly_schedule){
    //     return view('Monthly_schedule.index')->with(['monthly_schedules' => $monthly_schedule->get()]);  
    // }
    public function show(Monthly_schedule $monthly_schedule){
        return view('Monthly_schedule.show')->with([ 'monthly_schedules' => $monthly_schedule ]);
    }
    public function edit(Monthly_schedule $monthly_schedule){
        return view('monthly_schedules/edit')->with(['monthly_schedule'=>$monthly_schedule]);
    }

    public function update(Monthly_schedule $request, Monthly_schedule $monthly_schedule){
        $input_monthly=$request['monthly_schedule'];
        $monthly->fill($input_monthly)->save();

        return redirect('/monthly_schedules/'.$monthly_schedule->id);
    }
}
