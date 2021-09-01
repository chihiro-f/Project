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
      <input type="text" name="today_schedules[title]" placeholder="タイトルを入力" value="{{ old('today_schedule.title') }}" >
      <p class="title_error" style="color:red">{{ $errors->first('today_schedule.title') }}</p>
      
      <!-- スケジュール入力 -->
      <h4>スケジュール内容</h4>
      <textarea name="today_schedules[content]" placeholder="本日のスケジュール内容を記入してください" value="{{ old('today_schedule.content') }}"></textarea>
      <p class="body_error" style="color:red">{{ $errors->first('today_schedule.content') }}</p>
      <br><br>
      <input type="submit" value="投稿" />
      <br><br><!-- 間 -->
    </div>
    <p></p>
    </form>

    <a href="/today">戻る</a>
  </body>

</html>