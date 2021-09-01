<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>部員サイト</title>
    <link href ="https:fonts.googleapis.com/css?family=Nunito:200,600">
    <link rel ="stylesheet" href="style_today.css">
  </head>


  <body>
    <h2 class = 'title_cite'>部員サイト</h2>
    
    <header>
      <ul>
        <li><a href="/today/{{ $today_schedules->id }}">Home</a></li>
        <li><a href="/monthly_schedule">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>

    <div class = 'schedule_today'>
      <h5>更新日：</h5>
      <p class="edit">[<a href="/today/{{ $today_schedules->id }}/edit">このスケジュールを編集</a>]</p>
      <a href='/today/create'>新規スケジュールを作成</a>
      <h1 class = 'title'>{{ $today_schedules->title }}</h1>
      <div class = 'context'>{{ $today_schedules->content }}</div>
      <p></p><!-- 間 -->
    </div>

    <p></p>
    <div class = 'comment_list'>
      <h5 class = 'title'>コメント一覧</h5>
      <p class = 'comment1'><h5>投稿者１</h5><h4>コメント内容</h4></p>
        <p></p>
    </div>

    <p></p>
    <div class = 'comment_post'>
      <h5 class = 'title'>コメント投稿</h5>
      <textarea name="post_content" placeholder="コメントを入力" ></textarea>
      <input type="submit" value="投稿">
      <p></p>
    </div>

    <p></p>
    <div class ='list_week'>
      
      <div class = 'list'>
        <h5>１週間のスケジュール</h5>
        @foreach($today_schedules as $today_schedule)
         <p>[<a href="/today">2021/08/07</a>]</p> 
        <p></p>
        @endforeach
      </div>
    </div>

  </body>
</html>