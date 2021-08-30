<?php

namespace App\Http\Controllers;

use App\Monthly_schedule;
use Illuminate\Http\Request;

class Monthly_scheduleController extends Controller
{
    //
    // public function index(Monthly_schedule $monthly_schedule){
    //     return view('Monthly_schedule.index')->with(['monthly_schedules' => $monthly_schedule->get()]);  
    // }
    public function show(Monthly_schedule $monthly_schedule){
        return view('Monthly_schedule.show')->with([ 'monthly_schedule' => $monthly_schedule ]);
    }
}
