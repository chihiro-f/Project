<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

    <form action="/posts" method="post">

    <div class = 'schedule_month'>
      <h1 class = 'title'>編集_活動日予定</h1>
      <textarea name="monthly[body]" ></textarea>
      <p></p>
      <input type="submit" value="更新" />
      <p></p><!-- 間 -->
    </div>
    <p></p>

    </form>

  </body>
</html>