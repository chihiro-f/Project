<!-- 活動日予定 -->
@extends('layouts.app')
<head>
  <title>@yield('title')部員サイト</title>
<head>
<body>
  
  
  @section('content')
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="/home">Home</a></li>
      <li class="nav-item"><a href="/monthly_schedule/1">今後の予定一覧</a></li>
      <li class="nav-item"><a href="/record">練習録音</a></li>
      <li class="nav-item"><a href="/network">連絡網</a></li>
    </ul>
  </nav>
    
  
  <div class = 'container'>
    <p class="edit">[<a href="/">このスケジュールを編集</a>]</p>
    <h1 class = 'title'>活動日予定</h1><br>
      
    <div class='context'>content</div>
    <p class = 'person'> email</p>

    <p class = 'updated_at'>updated_at</p><br>
  </div>
  @endsection
  
</body>
