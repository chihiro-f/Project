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
    <li class="nav-item"><a class="nav-link active" href="/home">　Home　</a></li>
    <li class="nav-item"><a class="nav-link" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class ='card-body'>
          <h1 class='title'>一日のスケジュール</h1>
          <p>[<a href='/today/create'>新規スケジュールを作成</a>]</p>
        </div>
      </div>
    </div><br>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <div class="card-body">
          <h3 class='card-title'>１週間のスケジュール</h3><br>
          @foreach($today_schedules as $today_schedule)
          <h4>[<a href="/today/{{ $today_schedule->id }}">{{ $today_schedule->title }}</a>]</h4><br>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection
  
</body>
