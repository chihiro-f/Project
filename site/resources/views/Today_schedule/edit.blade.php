<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style_today.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

    <form action="/monthly_schedule/{{monthly_schedule->id}}" method="POST">
      @csrf
      @method('PUT')
    <div class = 'schedule_month'>
      <h1 class = 'title'>編集_今日のスケジュール</h1>
      <h4>タイトル</h4>
      <input type="text">
      <h4>スケジュール内容</h4>
      <textarea name="today[body]" ></textarea>
      <p></p>
      <input type="submit" value="更新" />
      <p></p><!-- 間 -->
    </div>
    <p></p>

    </form>

  </body>
</html>