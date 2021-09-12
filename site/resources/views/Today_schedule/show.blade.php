<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
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
        <li><a href="/monthly_schedule/1">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>

    <div class = 'schedule_today'>
      <h2>一日のスケジュール</h2>
      <h5>更新日：{{ $today_schedules->updated_at }}</h5>
      [<a href="/today/{{ $today_schedules->id }}/edit">このスケジュールを編集</a>]
      <h1 class = 'title'>{{ $today_schedules->title }}</h1>
      <div class = 'context'>{{ $today_schedules->content }}</div><br>
      
      <p></p>
    </div>

    <p></p>
    <div class = 'comment_list'>
      <h5 class = 'title'>コメント一覧</h5>
      <!--@if ($comments->count() > 0)-->
      <!--@foreach($comments as $comment)-->
      <p class = 'comment'><h5>投稿者１</h5><h4>{{ $comment->content }}</h4></p><br>
      <!--@endforeach-->
      <!--@else-->
      <!--  コメントはまだ投稿されていません<br>-->
      <!--@endif-->
    </div>

    <p></p>
    <form action="{{ route('comment.store') }}" method="POST">
    @csrf
    <input type="hidden" name="comment[today_schedule]" value="{{ $today_schedules->id }}">
    <div class = 'comment_post'>
      <h5 class = 'title'>コメント投稿</h5>
      <textarea name="comment[content]" placeholder="コメントを入力" ></textarea>
      <input type="submit" value="投稿"><br>
    </div>
    </form>

    <p></p>

  </body>
</html>

