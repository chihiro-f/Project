<?php

namespace App\Http\Controllers;

use App\Today_schedule;
use Illuminate\Http\Request;

class Today_scheduleController extends Controller
{
    //
    public function show(Today_schedule $today_schedule){
        $today_schedule=[];
        return view('Today_schedule.show')->with(['today_schedule'=>$today_schedule]);
    }
}
