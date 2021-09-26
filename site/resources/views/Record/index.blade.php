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
  
  <div class="row justify-content-center">
  <form class="form-inline">
  @csrf
  <div class="form-group">
    <input type="search" class="form-control" value="{{ request('search')}}" placeholder="検索したいタイトルやグループ名を入力してください" name="search" size="48">
  </div>
  <input type="submit" class="btn btn-outline-info" value="検索" />
  </form>
  </div>
  
  @if(session('message'))
  <div class="alert alert-success">{{session('message')}}</div>
  @endif
  
  <div class="card w-75 mx-auto">
    <div class='card-body'>
      <ul class="list-group list-group-flush">
        @if ($records->count() > 0)
        @foreach ($records as $record)
        <li class="list-group-item">
          <div class="row">
          <h3 class="col text-left"><a href="{{ $record->url }}">{{ $record->title }}</a></h3>
          <form action="/record/{{ $record->id }}" id="form_{{ $record->id }}" method="post" style="display:inline">
          @csrf
          @method('DELETE')
          <div class="col text-left">
          <input type="submit" class="btn btn-outline-info" value="削除"><br>
          </div>
          </form><br>
          </div>
          
          <div class="row">
            <div class="row col text-left">
            <h5 class="text-muted">　投稿日：</h5><h5>{{ $record->created_at }}</h5>
          </div>
          <div class="row col text-right">
            <h5 class="text-muted">グループ：</h5><h5>{{ $record->group }}</h5>
          </div>
          </div>
        </li>
        @endforeach
        <div class="mx-auto">
         {{ $records->links() }}
        </div>
        @else
          該当する録音フォルダはありません<br>
        @endif
      </ul>
    </div>
  </div>
  </div>
  @endsection
  
</body>