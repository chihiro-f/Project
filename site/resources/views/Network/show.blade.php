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
  
  @if(session('message'))
  <div class="alert alert-success">{{session('message')}}</div>
  @endif
  
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
          <h5 class = 'card-subtitle text-muted'>投稿者 : {{ $networks->user->email }}</h5>
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