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
          <h1 class = 'title'>編集_今日のスケジュール</h1>
        </div>
      </div>
    </div><br>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class ='card-body'>
        <form action="/today/{{ $today_schedule->id }}" method="POST">
        @csrf
        @method('PUT')
        <h4>タイトル</h4>
        <input type="text" name='today_schedule[title]' value="{{ $today_schedule->title }}" />
        <p class="title_error" style="color:red">{{ $errors->first('today_schedule.title') }}</p>
        <h4>スケジュール内容</h4>
        <input type="text" name="today_schedule[content]" value="{{ $today_schedule->content }}"/><br>
        <p class="content_error" style="color:red">{{ $errors->first('today_schedule.content') }}</p>
        <p></p>
        <input type="submit" class="btn btn-outline-info" value="更新" />
        <p></p><!-- 間 -->
        </form>
        </div>
      </div>
      <a href="/today/{{ $today_schedule->id }}">戻る</a>
    </div>
  </div>
  @endsection
  
</body>
