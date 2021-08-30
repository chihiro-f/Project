<!-- 活動日予定 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>
    
    <div class = 'schedule_month'>
      <input type="button" value="編集" />
      <h1 class = 'title'>活動日予定</h1>
      <div class = 'context'>{{ $monthly_schedule->content }}</div>
      <p></p><!-- 間 -->
      <!-- <p class = 'person'></div>   編集者の情報 -->
      <p class = 'updated_at'>{{ $monthly_schedule->updated_at }}</p>
    </div>

  </body>
</html>
