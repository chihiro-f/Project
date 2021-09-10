<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Record $record){
        return view('Record.index')->with([ 'records' => $record->getPaginateByLimit()]);  
    }
}
