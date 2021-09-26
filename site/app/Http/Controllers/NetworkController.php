<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Network;
use App\User;
use App\Http\Requests\NetworkRequest;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    //
    public function __construct() {
        // $this->middleware('auth');
        $this->middleware('verified');
    }
    
    public function index(Network $network){
        $network=Network::latest()->where(function ($query){
        // $records=Record::orderBy('created_at','DESC')->where(function ($query){
            //検索機能
            if($search=request('search')){
                $query->where('title','LIKE',"%{$search}%")->orWhere('content','LIKE',"%{$search}%");
            }
        });
        $network=$network->paginate(10);
        
        return view('Network.index')->with([ 'networks' => $network ]);
    }
    
    public function show(Network $network){
        return view('Network.show')->with([ 'networks' => $network ]);
    }
    
    public function create(){
        return view('Network.create');
    }

    public function store(NetworkRequest $request){
        $user=Auth::user();
        
        $network = new Network();
        $network->title = $request->input('network.title');
        $network->content = $request->input('network.content');
        $network->user_id=$user->id;
        
        $network->save();
        
        return redirect('/network/' . $network->id)->with('message','連絡の投稿が完了しました');
    }
}
