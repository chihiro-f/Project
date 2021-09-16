<!-- 活動日予定 -->
<!--<!doctype HTML>-->
<!--<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>部員サイト</title>-->
<!--    <link href="{{secure_asset('/css/style_monthly.css')}}" rel="stylesheet">-->

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
    
<!--    <div class = 'schedule_month'>-->
<!--      <p class="edit">[<a href="/monthly_schedule/{{ $monthly_schedules->id }}/edit">このスケジュールを編集</a>]</p>-->
<!--      <h1 class = 'title'>活動日予定</h1><br>-->
<!--      @if ($monthly_schedules->count() > 0)-->
<!--          <div class='context'>{{ $monthly_schedules->content }}</div>-->
<!--          <p class = 'person'> 編集者 : {{ $monthly_schedules->user->email }}</p>-->
<!--      @else-->
<!--        データがありません-->
<!--      @endif-->

<!--      <p class = 'updated_at'>更新日 : {{ $monthly_schedules->updated_at }}</p><br>-->
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
    <li class="nav-item"><a class="nav-link active" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class ='card-body'>
          <h1 class='card-title'>活動日予定</h1>
          <p class = 'card-subtitle text-muted'>更新日 : {{ $monthly_schedules->updated_at }}</p>
          <p class = 'text-muted'> 編集者 : {{ $monthly_schedules->user->email }}</p>
        </div>
      </div>
    </div><br>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <p>[<a href="/monthly_schedule/{{ $monthly_schedules->id }}/edit">このスケジュールを編集</a>]</p>
        <h3>{{ $monthly_schedules->content }}</h3>
      </div>
    </div>
  </div>
  </div>
  @endsection
  
</body>

