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

    <form action="/posts" method="post">
    @csrf
    <div class = 'schedule_month'>
      <h1 class = 'title'>新規投稿_今日のスケジュール</h1>
      <!-- タイトル入力 -->
      <h4>タイトル</h4>
      <input type="text" name="today_schedules[title]">
      <!-- スケジュール入力 -->
      <h4>スケジュール内容</h4>
      <textarea name="today_schedules[content]" ></textarea>
      <p></p>
      <input type="submit" value="投稿" />
      <p></p><!-- 間 -->
    </div>
    <p></p>
    </form>

    <a href="/">戻る</a>
  </body>

</html>