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
        //アクセストークンの取得
        $options =[
            'form_params'=>[
                // 'client_id'=> '0229b4e5-3892-4e95-9399-171f4004760a',
                'client_id'=> env('OAUTH_APP_ID'),
                'scope'=>env('OAUTH_SCOPES'),
                'client_secret'=> env('OAUTH_APP_SECRET'),
                'grant_type'=>'client_credentials',
            ],
        ];
        $guzzle= new Client();
        $json = json_decode(
            $guzzle->post(
                'https://login.microsoftonline.com/'.env('OAUTH_APP_TENANT').'/oauth2/v2.0/token',
                $options
            )
            ->getBody()
            ->getContents()
        );
        $accessToken = $json->access_token;
        dd($accessToken);
        
        
        //データの取得
        $options=[
            'headers' =>[
                'Authorization'=>'Bearer ' . $json->access_token
            ],
            // 'body'=>fopen('file path','r'),
        ];
        // $guzzle= new Client();
        $json=json_decode(
            $guzzle->get(
                'https://graph.microsoft.com/v1.0/me/drive/root/children'
            )
            ->getBody()
            ->getContents()
        );

        
        return view('Record.index')->with([ 'records' => $records]);  
    }
}
