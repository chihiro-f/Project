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
    
    public function index(Record $record){
        return view('Record.index')->with([ 'records' => $record->get() ]);
    }
    
    public function create(){
        return view('Record.create');
    }
    
    public function store(Request $request, Record $record){
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/record');
    }
    
    public function search(Request $request){
        $keyword_group=$request->group;
        if(!empty($keyword_group)){
            $query=Record::query();
            $records=$query->where('group','like','%'.$keyword_group.'%')->get();
            $message=$keyword_group."を含むグループの検索結果";
            return view('/record/search/$keyword_group')->with([
                'records'=>$records ,
                'message'=>$message,
            ]);
        }elseif(empty($keyword_group)){
            $message="グループ名を入力してください";
            return view('/record/search')->with([
                'message' => $message,
            ]);
        }else{
            $message="検索結果はありません";
            return view('/record/search')->with('message',$message);
        }
    }
}
