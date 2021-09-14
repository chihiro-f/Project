<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link href="{{secure_asset('/css/style_network.css')}}" rel="stylesheet">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>
    
    <nav>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/monthly_schedule/1">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </nav>
    <br><br>
    
    <div class='network_list'><br>
      <h1 class='title'>連絡網</h1>
      
      <div class='network_packet'>
          <h1 class = 'title'>{{ $networks->title }}</h1>
          <h5>編集者 : {{ $networks->user->email }}</h5>
          <h5>投稿日 : {{ $networks->created_at }}</h5>
          <p class = 'context'>{{ $networks->content }}</p><br>
      </div><br><br>
    </div><br>
    <a href="/network">戻る</a>
    
  </body>
</html>