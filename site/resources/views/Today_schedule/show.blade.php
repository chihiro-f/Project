<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link href="css/style_today.css" rel ="stylesheet">
    <!--<link href ="https:fonts.googleapis.com/css?family=Nunito:200,600">-->
  </head>


  <body>
    <h2 class = 'title_cite'>部員サイト</h2>
    
    <header>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/monthly_schedule/1">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>

    <div class = 'schedule_today'>
      <h2>１日のスケジュール</h2>
      <h5>更新日：</h5>
      <p class="edit">[<a href="/today/{{ $today_schedules->id }}/edit">このスケジュールを編集</a>]</p>
      [<a href='/today/create'>新規スケジュールを作成</a>]
      <h1 class = 'title'>{{ $today_schedules->title }}</h1>
      <div class = 'context'>{{ $today_schedules->content }}</div>
      <p></p><!-- 間 -->
    </div>

    <p></p>
    <div class = 'comment_list'>
      <h5 class = 'title'>コメント一覧</h5>
      <p class = 'comment1'><h5>投稿者１</h5><h4>コメント１の内容</h4></p><br>
    </div>

    <p></p>
    <div class = 'comment_post'>
      <h5 class = 'title'>コメント投稿</h5>
      <textarea name="comment_content" placeholder="コメントを入力" ></textarea>
      <input type="submit" value="投稿">
      <p></p>
    </div>

    <p></p>

  </body>
</html>

