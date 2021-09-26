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
  
  @if(session('message'))
  <div class="alert alert-success">{{session('message')}}</div>
  @endif
  
  @if(session('message2'))
  <div class="alert alert-danger">{{session('message2')}}</div>
  @endif
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height"><br>
      <h1>一日のスケジュール</h1>
      
      <div class ='card-body'>
        <p>[<a href="/today/{{ $today_schedules->id }}/edit">このスケジュールを編集</a>]</p>
        
        <div class="row justify-content-center">
        <form action="/today/{{ $today_schedules->id }}" id="form_{{ $today_schedules->id }}" method="post" style="display:inline">
          @csrf
          @method('DELETE')
          <div class="col text-left">
          <input type="submit" class="btn btn-outline-danger" value="削除"><br>
          </div>
        </form><br>
        </div>
        
        
        
      </div>
      
    </div>
  </div>
  </div><br>
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <h1 class='card-title'>{{ $today_schedules->title }}</h1><br>
        <p class = 'card-subtitle text-muted'>更新日：{{ $today_schedules->updated_at }}</p>
        <p class = 'card-subtitle text-muted'>投稿者：{{ $today_schedules->user->email }}</p><br>
        <p>{{ $today_schedules->content }}</p>
      </div>
    </div>
  </div>
  </div><br>
  
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center full-height"><br>
        <div class='card-body'>
          <h3>コメント一覧</h3>
          <p class="text-muted text-right">コメント数：{{ $count }}　</p>
          <table class="table">
          @if ($comments->count() > 0)
            <tr>
              <th>投稿者</th></th><th>投稿日</th><th>コメント内容</th>
            </tr>
            @foreach($comments as $comment)
              <tr>
                <td>{{ $comment->user->email }}</td><td>{{ $comment->created_at }}</td><td class="text-break">{{ $comment->content }}</td>
              </tr>
            @endforeach
            <br>
          @else
            コメントはまだ投稿されていません<br>
          @endif
          </table>
        </div>
      </div>
    </div>
  </div><br>
          
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center full-height"><br>
          <form action="{{ route('comment.store') }}" method="POST">
          @csrf
          <input type="hidden" name="comment[today_schedule]" value="{{ $today_schedules->id }}">
          <h3 class='card-title'>コメント投稿</h3>
          <textarea name="comment[content]" placeholder="コメントを入力してください" rows="3" cols="80"></textarea><br><br>
          <p class="comment_error" style="color:red">{{ $errors->first('comment.content') }}</p>
          <input type="submit" class="btn btn-outline-info" value="投稿"><br>
          </form>
      </div>
    </div>
  </div>
  
  @endsection
  
</body>


