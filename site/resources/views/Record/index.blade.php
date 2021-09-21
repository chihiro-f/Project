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
    <li class="nav-item"><a class="nav-link active" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
      <h1 class='card-title'>録音一覧</h1>
      [<a href='/record/create'>新しい録音を投稿する</a>]<br>
      </div>
    </div>
  </div><br>
  
  <form action="{{ url('/record/search') }}" method="post">
  @csrf
  <div class="form-group">
    <label>名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したいグループ名を入力してください" name="name">
  </div>
  <input type="submit" class="btn btn-outline-info" value="検索" />
  </form>
  
  @if(session('flash_message'))
  <div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
  @endif
  
  <div class="card text-center w-60 mx-auto">
    <div class='card-body'>
      <ul class="list-group list-group-flush">
        @if ($records->count() > 0)
        @foreach ($records as $record)
        <li class="list-group-item">
          <h3><a href="{{ $record->url }}">{{ $record->title }}</a></h3>
          <h5>投稿日：{{ $record->created_at }}</h5>
        </li>
        @endforeach
        @else
          録音フォルダはありません<br>
        @endif
      </ul>
    </div>
  </div>
  </div>
  @endsection
  
</body>