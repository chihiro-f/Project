<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="css/style_today.css">
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

    <div class ='schedule_today'>
      <h2>一日のスケジュール</h2>
      <div class ='list_week'>
        @foreach($today_schedules as $today_schedule)
        <div class = 'list'>
          <h5>１週間のスケジュール</h5>
          <p>[<a href="/today/{{ $today_schedule->id }}">{{ $today_schedule->title }}</a>]</p>
          <p></p>
        </div>
        @endforeach
      </div><br>
    </div>

  </body>

  </html>