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
    
    <div class='schedule_month'>
      <form action="/today/{{ $today_schedule->id }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class = 'title'>編集_今日のスケジュール</h1>
        <h4>タイトル</h4>
        <input type="text" name='today_schedule[title]' value="{{ $today_schedule->title }}" />
        <h4>スケジュール内容</h4>
        <input type="text" name="today_schedule[content]" value="{{ $today_schedule->content }}" /><br>
        <p></p>
        <input type="submit" value="更新" />
        <p></p><!-- 間 -->
      </form>
    </div>
    <p></p>
    <a href="/today/{{ $today_schedule->id }}">戻る</a>

  </body>
</html>