<!--<!DOCTYPE html>-->
<!--<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>部員サイト</title>-->
<!--    <link href="{{secure_asset('/css/style_network.css')}}" rel="stylesheet">-->
<!--  </head>-->

<!--  <body>-->
<!--    <h2 class = 'title_cite'>部員サイト</h2>-->
    
<!--    <nav>-->
<!--      <ul>-->
<!--        <li><a href="/home">Home</a></li>-->
<!--        <li><a href="/monthly_schedule/1">今後の予定一覧</a></li>-->
<!--        <li><a href="/record">練習録音</a></li>-->
<!--        <li><a href="/network">連絡網</a></li>-->
<!--      </ul>-->
<!--    </nav>-->
<!--    <br><br>-->
    
<!--    <div class='network_list'><br>-->
<!--      <h1 class='title'>連絡網</h1>-->
      
<!--      <div class='network_packet'>-->
<!--          <h1 class = 'title'>{{ $networks->title }}</h1>-->
<!--          <h5>編集者 : {{ $networks->user->email }}</h5>-->
<!--          <h5>投稿日 : {{ $networks->created_at }}</h5>-->
<!--          <p class = 'context'>{{ $networks->content }}</p><br>-->
<!--      </div><br><br>-->
<!--    </div><br>-->
<!--    <a href="/network">戻る</a>-->
    
<!--  </body>-->
<!--</html>-->





@extends('layouts.app')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>@yield('title')部員サイト</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
  
  
  @section('content')
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item"><a class="nav-link" href="/home">　Home　</a></li>
    <li class="nav-item"><a class="nav-link" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link active" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <h1 class='card-title'>連絡網</h1>
    </div></div></div><br>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <h1 class = 'card-title'>{{ $networks->title }}</h1>
          <h5 class = 'card-subtitle text-muted'>編集者 : {{ $networks->user->email }}</h5>
          <h5 class = 'text-muted'>投稿日 : {{ $networks->created_at }}</h5><br>
          <h4>{{ $networks->content }}</h4><br>
      </div>
      </div>
      <a href="/network">戻る</a>
    </div>
  </div>
  </div>
  @endsection
  
</body>