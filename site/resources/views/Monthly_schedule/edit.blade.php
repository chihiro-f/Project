<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link href="{{secure_asset('/css/style_monthly.css')}}" rel="stylesheet">
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

    <form action="/monthly_schedule/{{ $monthly_schedule->id }}" method="POST">
      @csrf
      @method('PUT')

    <div class = 'schedule_month'>
      <h1 class = 'title'>編集_活動日予定</h1>
      <input type="text" name="monthly_schedule[content]" value="{{ $monthly_schedule->content }}"/>
      <p></p>
      <input type="submit" value="更新" /><br><br>
    </div><br>

    </form>
    
    <a href="/monthly_schedule/1">戻る</a>

  </body>
</html>