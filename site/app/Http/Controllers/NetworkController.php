<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Network;
use App\User;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Network $network){
        return view('Network.index')->with([ 'networks' => $network->getPaginateByLimit() ]);
    }
    
    public function show(Network $network){
        return view('Network.show')->with([ 'networks' => $network ]);
    }
    
    public function create(){
        return view('Network.create');
    }

    public function store(Request $request){
        
        $user=Auth::user();
        
        $network = new Network();
        $network->title = $request->input('network.title');
        $network->content = $request->input('network.content');
        $network->user_id=$user->id;
        
        $network->save();
        
        return redirect('/network/' . $network->id);
    }
}
