<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //
    public function index(Record $record){
        return view('Record.index')->with(['records' => $record->get()]);  
    }
}