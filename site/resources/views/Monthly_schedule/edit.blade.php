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
    <li class="nav-item"><a class="nav-link active" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <h1 class='card-title'>編集 [活動日予定]</h1>
        
        <form action="/monthly_schedule/{{ $monthly_schedule->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class = 'schedule_month'>
            <input type="text" name="monthly_schedule[content]" value="{{ $monthly_schedule->content }}"/>
            <p class="content_error" style="color:red">{{ $errors->first('monthly_schedule.content') }}</p><br>
            <input type="submit" class="btn btn-outline-info" value="更新" /><br><br>
          </div><br>
        </form>
        
      </div>
      <a href="/monthly_schedule/1">戻る</a>
    </div>
  </div>
  
  </div>
  @endsection
  
</body>

