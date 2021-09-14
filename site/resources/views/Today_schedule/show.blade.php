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
    </div>

    <br>
    <div class = 'comment_list'>
      <h3 class = 'title'>コメント一覧</h3>
      @if ($comments->count() > 0)
      <h5>　投稿者　　　　　　　　　　　　　コメント内容</h5>
      @foreach($comments as $comment)
      <p class = 'comment'>　{{ $comment->user->email }}　　　{{ $comment->content }}</p><br>
      @endforeach
      @else
        コメントはまだ投稿されていません<br>
      @endif
    </div>

    <br>
    <form action="{{ route('comment.store') }}" method="POST">
    @csrf
    <input type="hidden" name="comment[today_schedule]" value="{{ $today_schedules->id }}">
    <div class = 'comment_post'>
      <h3 class = 'title'>コメント投稿</h3>
      <textarea name="comment[content]" placeholder="コメントを入力" ></textarea>
      <input type="submit" value="投稿"><br>
    </div>
    </form>

    <p></p>

  </body>
</html>

