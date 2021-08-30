<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

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