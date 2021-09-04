<?php

namespace App\Http\Controllers;

use App\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    //
    public function index(Network $network){
        return view('Network.index')->with([ 'networks' => $network->getPaginateByLimit() ]);
    }
    
    public function show(Network $network){
        return view('Network.show')->with([ 'networks' => $network ]);
    }
    
    public function create(){
        return view('Network.create');
    }

    public function store(Request $request, Network $network){
        $input = $request['network'];
        $network->fill($input)->save();
        return redirect('/network/' . $network->id);
    }
}
