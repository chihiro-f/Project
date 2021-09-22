<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Record;
use Illuminate\Http\Request;


class RecordController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Record $record, Request $request){
        $records=Record::orderBy('created_at','asc')->where(function ($query){
            //検索機能
            if($search=request('search')){
                $query->where('person','LIKE',"%{$search}%");
            }
        });
        
        return view('Record.index')->with([ 'records' => $records->get() ]);
    }
    
    public function create(){
        return view('Record.create');
    }
    
    public function store(Request $request, Record $record){
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/record');
    }
    
    public function delete(Record $record){
        $record->delete();
        return redirect('/record');
    }
}
