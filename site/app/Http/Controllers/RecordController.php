<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Record;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RecordController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Record $record, Request $request){
        
        // $tag_id = "laravel";

        // $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
        // $url = "https://graph.microsoft.com/v1.0/me/drive/root/children";
        // $url="https://login.live.com/oauth20_authorize.srf?client_id={client_id}&scope={scope}&response_type=token&redirect_uri={redirect_uri}";
        $url="https://graph.microsoft.com/v1.0/users/{id}";
        
        $method = "GET";

        //接続
        $client = new Client();
        
        // getBody()メソッドを使用してメッセージの本文を取得
        $response = $client->request($method, $url);
        
        // dd($response);

        $records = $response->getBody();
        // JSON文字列を配列に変換
        $records = json_decode($records, true);
        
        
        return view('Record.index')->with([ 'records' => $records]);  
    }
}
