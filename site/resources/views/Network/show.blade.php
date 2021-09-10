<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link href="{{secure_asset('/css/style_today.css')}}" rel="stylesheet">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>
    
    <header>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/monthly_schedule">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>

    <h2 class='title'>連絡網</h2>
    <div class='network_list'>
      <!-- <p><h2>T i t l e 5</h2><h4>by 投稿者2</h4><h5>投稿日：2021/08/05</h5></p> -->
      <p><h2>{{ $network->title }}</h2><h4>{{ $network->user-id }}</h4><h5>{{ $network->created_at }}</h5></p>
      <p></p>
      <p class = 'content'>{{ $network->content }}</p>
    </div>
    <a href="/">戻る</a>
  </body>
</html>