<!-- 連絡網投稿 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link href="{{secure_asset('/css/style_network.css')}}" rel="stylesheet">
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
    
    <div class='network_list'><br>
      <h1 class='title'>連絡網</h1>
      [<a href='/network/create'>新規連絡を登録</a>]<br><br>
      
      @if ($networks->count() > 0)
        @foreach ($networks as $network)
          <div class ='network_packet'>
            <p><a href="/network/{{ $network->id }}">{{ $network->title }}</a>　by {{ $network->user->email}}　投稿日：{{ $network->created_at }}</p>
            <p class ='sentence_limit'>{{ $network->content }}</p>
          </div>
        @endforeach
      @else
        連絡は投稿されていません<br>
      @endif
      
      <br>
      
      <p></p>
      <div class ='paginate'>
        {{ $networks->links() }}
      </div>
    </div>
  </body>

</html>