<!--<!doctype HTML>-->
<!--<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>部員サイト</title>-->
<!--    <link href="{{secure_asset('/css/style_today.css')}}" rel="stylesheet">-->
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
  
<!--    <form action="/today" method="POST">-->
<!--    @csrf-->
<!--    <div class = 'schedule_month'>-->
<!--      <h1 class = 'title'>新規投稿_今日のスケジュール</h1>-->
      <!-- タイトル入力 -->
<!--      <h4>タイトル</h4>-->
<!--      <input type="text" name="today_schedule[title]" placeholder="タイトルを入力" value="{{ old('today_schedule.title') }}" >-->
<!--      <p class="title_error" style="color:red">{{ $errors->first('today_schedule.title') }}</p>-->
      
      <!-- スケジュール入力 -->
<!--      <h4>スケジュール内容</h4>-->
<!--      <textarea name="today_schedule[content]" placeholder="本日のスケジュール内容を記入してください" value="{{ old('today_schedule.content') }}" rows="6" cols="100"></textarea>-->
<!--      <p class="content_error" style="color:red">{{ $errors->first('today_schedule.content') }}</p>-->
<!--      <br><br>-->
<!--      <input type="submit" value="投稿" />-->
<!--      <br><br><!-- 間 -->-->
<!--    </div>-->
<!--    <p></p>-->
<!--    </form>-->

<!--    <a href="/home">戻る</a>-->
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
    <li class="nav-item"><a class="nav-link active" href="/home">　Home　</a></li>
    <li class="nav-item"><a class="nav-link" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
    <div class ='card-body'>
    <h1 class = 'card-title'>新規投稿_今日のスケジュール</h1>
    </div></div></div><br>
    
    <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <form action="/today" method="POST">
          @csrf
          <h4>タイトル</h4>
          <input type="text" name="today_schedule[title]" placeholder="タイトルを入力" value="{{ old('today_schedule.title') }}" >
          <p class="title_error" style="color:red">{{ $errors->first('today_schedule.title') }}</p><br>
      
          <h4>スケジュール内容</h4>
          <textarea name="today_schedule[content]" placeholder="本日のスケジュール内容を記入してください" value="{{ old('today_schedule.content') }}" rows="6" cols="100"></textarea>
          <p class="content_error" style="color:red">{{ $errors->first('today_schedule.content') }}</p>
          <br><br>
          <input type="submit" class="btn btn-outline-info" value="投稿" />
          <br><br>
          </div>
        </form>
      </div>
      <a href="/home">戻る</a>
    </div>
    </div>
  </div>
  @endsection
  
</body>