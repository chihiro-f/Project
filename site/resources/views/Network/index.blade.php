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
      [<a href='/network/create'>新規連絡を登録</a>]<br>
      </div>
    </div>
  </div><br>
  <div class="card text-center w-75 mx-auto">
    <div class='card-body'>
      <ul class="list-group list-group-flush">
        @if ($networks->count() > 0)
        @foreach ($networks as $network)
        <li class="list-group-item">
          <h3><a href="/network/{{ $network->id }}">{{ $network->title }}</a></h3>
          <h5 class='text-muted'>投稿者 : {{ $network->user->email}}　投稿日：{{ $network->created_at }}</h5>
          <h5 class ='text-truncate'>{{ $network->content }}</h5>
        </li>
        @endforeach
        <div class="mx-auto">
         {{ $networks->links() }}
         </div>
        @else
          連絡は投稿されていません<br>
        @endif
      </ul>
    </div>
  </div>
  </div>
  
  @endsection
  
</body>
