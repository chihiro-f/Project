<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>部員サイト</title>
    <link href="{{secure_asset('/css/style_today.css')}}" rel="stylesheet">

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

    <div class ='schedule_today'><br>
      <h1>一日のスケジュール</h1>
      [<a href='/today/create'>新規スケジュールを作成</a>]
      <div class ='list_week'>
        
        <div class = 'list'>
          <h3>１週間のスケジュール</h3>
          @foreach($today_schedules as $today_schedule)
          <p>[<a href="/today/{{ $today_schedule->id }}">{{ $today_schedule->title }}</a>]</p>
          <p></p>
          @endforeach
        </div>
        
      </div><br>
    </div>

  </body>

  </html>