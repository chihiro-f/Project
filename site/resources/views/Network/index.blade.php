<!-- 連絡網投稿 -->
<!--<!doctype HTML>-->
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
<!--      [<a href='/network/create'>新規連絡を登録</a>]<br><br>-->
      
<!--      @if ($networks->count() > 0)-->
<!--        @foreach ($networks as $network)-->
<!--          <div class ='network_packet'>-->
<!--            <h3><a href="/network/{{ $network->id }}">{{ $network->title }}</a>　投稿者 : {{ $network->user->email}}　投稿日：{{ $network->created_at }}</h3>-->
<!--            <p class ='sentence_limit'>{{ $network->content }}</p>-->
<!--          </div>-->
<!--        @endforeach-->
<!--      @else-->
<!--        連絡は投稿されていません<br>-->
<!--      @endif-->
      
<!--      <br>-->
      
<!--      <p></p>-->
<!--      <div class ='paginate'>-->
<!--        {{ $networks->links() }}-->
<!--      </div>-->
<!--    </div>-->
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
      [<a href='/network/create'>新規連絡を登録</a>]<br>
      </div>
    </div>
  </div><br>
  <div class="card text-center w-60 mx-auto">
    <div class='card-body'>
      <ul class="list-group list-group-flush">
        @if ($networks->count() > 0)
        @foreach ($networks as $network)
        <li class="list-group-item">
          <h3><a href="/network/{{ $network->id }}">{{ $network->title }}</a></3>
          <h5 class='text-muted'>投稿者 : {{ $network->user->email}}　投稿日：{{ $network->created_at }}</h5>
          <h5 class ='text-truncate'>{{ $network->content }}</h5>
        </li>
        @endforeach
        @else
          連絡は投稿されていません<br>
        @endif
      </ul>
    </div>
  </div>
  </div>
  
  @endsection
  
</body>
