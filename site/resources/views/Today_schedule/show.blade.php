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
    <div class="flex-center position-ref full-height"><br>
      <h1>一日のスケジュール</h1>
      <div class ='card-body'>
        <p class = 'card-subtitle text-muted'>更新日：{{ $today_schedules->updated_at }}</p>
        <p>[<a href="/today/{{ $today_schedules->id }}/edit">このスケジュールを編集</a>]</p>
        <h1 class='card-title'>{{ $today_schedules->title }}</h1>
        <h3>{{ $today_schedules->content }}</h3>
        
      </div>
      
    </div>
  </div>
  </div><br>
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class='card-body'>
        <h3 class='card-title'>コメント一覧</h3>
        @if ($comments->count() > 0)

            <h5>投稿者　　　　　コメント内容</h5>
            @foreach($comments as $comment)
            <p class = 'comment'>{{ $comment->user->email }}　{{ $comment->content }}</p><br>
            @endforeach

        
        @else
          コメントはまだ投稿されていません<br>
        @endif
        
      </div>
    </div>
  </div><br>
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class='card-body'>
      <form action="{{ route('comment.store') }}" method="POST">
      @csrf
      <input type="hidden" name="comment[today_schedule]" value="{{ $today_schedules->id }}">
      <div class = 'comment_post'>
        <h3 class='card-title'>コメント投稿</h3>
        <textarea name="comment[content]" placeholder="コメントを入力してください" rows="3" cols="80"></textarea><br><br>
        <input type="submit" class="btn btn-outline-info" value="投稿"><br>
      </div>
      </form>
    </div>
  </div>
  </div>
  
  @endsection
  
</body>


