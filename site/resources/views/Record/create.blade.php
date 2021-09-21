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
          <h1 class="card-title">新規投稿_録音</h1>
        </div>
      </div>
    </div><br>
    <div class="card text-center w-60 mx-auto">
      <div class="flex-center position-ref full-height">
        <div class='card-body'>
          <form action="/record" method="POST">
          @csrf

          <h4>タイトル</h4>
          <input type="text" name="record[title]" placeholder="タイトルを入力" value="{{ old('record.title') }}" >
          <p class="title_error" style="color:red">{{ $errors->first('record.title') }}</p>

          <h4>グループ</h4>
          <input type="text" name="record[person]" placeholder="グループ・属性を入力" value="{{ old('record.person') }}" >
          <p class="group_error" style="color:red">{{ $errors->first('record.person') }}</p>

          <h4>URL</h4>
          <textarea name="record[url]" placeholder="URLを記入してください" value="{{ old('record.url') }}" rows="2" cols="50"></textarea>
          <p class="url_error" style="color:red">{{ $errors->first('record.url') }}</p><br><br>
          <input type="submit" class="btn btn-outline-info" value="投稿"/><br>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  
</body>