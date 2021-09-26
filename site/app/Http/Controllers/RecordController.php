<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Record;
use App\Http\Requests\RecordRequest;
use Illuminate\Http\Request;


class RecordController extends Controller
{
    
    public function __construct() {
        // $this->middleware('auth');
        $this->middleware('verified');
    }
    
    public function index(Record $record){
        $record=Record::latest()->where(function ($query){
            //検索機能
            if($search=request('search')){
                $query->where('group','LIKE',"%{$search}%")->orWhere('title','LIKE',"%{$search}%");
            }
        });
        $record=$record->paginate(10);
        
        return view('Record.index')->with([ 'records' => $record ]);
    }
    
    public function create(){
        return view('Record.create');
    }
    
    public function store(RecordRequest $request, Record $record){
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/record')->with('message','録音の投稿が完了しました');
    }
    
    public function delete(Record $record){
        $record->delete();
        return redirect('/record');
    }
}
