<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="css/style_today.css">
    <link href ="https:fonts.googleapis.com/css?family=Nunito:200,600">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

    
    <div class='schedule_month'>
      <form action="/today/{{ $today_schedule->id }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class = 'title'>編集_今日のスケジュール</h1>
        <h4>タイトル</h4>
        <input type="text" name='today_schedule[title]' value="{{ $today_schedule->title }}">
        <h4>スケジュール内容</h4>
        <input type="text" name="today[content]" value="{{ $today_schedule->content }}" /><br>
        <p></p>
        <input type="submit" value="更新" />
        <p></p><!-- 間 -->
      </form>
    </div>
    <p></p>
    <a href="/today/{{ $today_schedule->id }}">戻る</a>

  </body>
</html>