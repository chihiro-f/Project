<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Today_schedule;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('verified');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Today_schedule $today_schedule)
    {
        return view('Today_schedule.index')->with(['today_schedules' => $today_schedule->getByLimit()]);
    }
    
    
    public function show(){
        $tda=Carbon::today()->subDay(2);
        
        $todays=Today_schedule::whereDate('updated_at','>=',$tda)->get()->count();
        $months=\App\Monthly_schedule::whereDate('updated_at','>=',$tda)->get()->count();
        $records=\App\Record::whereDate('updated_at','>=',$tda)->get()->count();
        $networks=\App\Network::whereDate('created_at','>=',$tda)->get()->count();
        
        return view('welcome')->with(['todayCount' => $todays])->with(['monthlyCount' => $months])->with([ 'recordCount' => $records ])->with([ 'networkCount' => $networks ]);;
    }

}
