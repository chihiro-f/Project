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
    
    public function index(Record $record){
        // $tag_id = "laravel";

        // $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
        $url = "https://graph.microsoft.com/v1.0/me/drive/root/children";
        
        $method = "GET";

        //接続
        $client = new Client();
        
        // getBody()メソッドを使用してメッセージの本文を取得
        $response = $client->request($method, $url);

        $posts = $response->getBody();
        // JSON文字列を配列に変換
        $posts = json_decode($posts, true);
        
        return view('Record.index')->with([ 'records' => $record->getPaginateByLimit()]);  
    }
}
