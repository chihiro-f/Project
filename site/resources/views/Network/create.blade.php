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
  
  <div class='container'>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class ='card-body'>
          <h1 class='card-title'>連絡網</h1>
        </div>
      </div>
    </div><br>
    <div class="card text-center w-75 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class ='card-body'>
        <form action="/network" method="POST">
        @csrf
        <h1 class='card-title'>新規投稿_連絡網</h1>
        <h4>タイトル</h4>
        <input type="text" name="network[title]" placeholder="タイトルを入力" value="{{ old('network.title') }}" >
        <p class="title_error" style="color:red">{{ $errors->first('network.title') }}</p>

        <h4>連絡内容</h4>
        <textarea name="network[content]" placeholder="連絡事項を記入してください" value="{{ old('network.content') }}" rows="6" cols="100"></textarea>
        <p class="content_error" style="color:red">{{ $errors->first('network.content') }}</p><br><br>
        <input type="submit" class="btn btn-outline-info" value="投稿"/><br>
        </form>
        </div>
      <a href="/network">戻る</a>
      </div>
    </div>
  </div>
  @endsection
  
</body>
