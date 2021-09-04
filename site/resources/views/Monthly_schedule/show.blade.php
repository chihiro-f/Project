<!-- 活動日予定 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="css/style_monthly.css">
    <link href ="https:fonts.googleapis.com/css?family=Nunito:200,600">
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
    
    <div class = 'schedule_month'>
      <p class="edit">[<a href="/monthly_schedule/{{ $monthly_schedules->id }}/edit">このスケジュールを編集</a>]</p>
      <h1 class = 'title'>活動日予定</h1>
      <div class = 'context'>{{ $monthly_schedules->content }}</div>
      <p></p><!-- 間 -->
      <!-- <p class = 'person'></div>   編集者の情報 -->
      <p class = 'updated_at'>{{ $monthly_schedules->updated_at }}</p>
    </div>

  </body>
</html>
