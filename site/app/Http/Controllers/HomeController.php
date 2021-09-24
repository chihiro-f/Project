<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Today_schedule;

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
}
