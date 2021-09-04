<!-- 連絡網投稿 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="css/style_network.css">
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
      <h2 class='title'>連絡網</h2>
      <p><a href="/"></p>
      
      @foreach($networks as $network)
      <div class ='network_packet'>
        <p><a href>{{ $network->title }}</a>　　by 投稿者2　　投稿日：{{ $network->updated_at }}</p>
        <!--<p><a href>T i t l e 5</a>　　by 投稿者2　　投稿日：2021/08/05</p>-->
        <!-- <p class ='sentence_limit'>This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body.</p> -->
        <p class ='sentence_limit'>{{ $network->content }}</p>
      </div>
      @endforeach
      <br>
      
      <p></p>
      <div class ='paginate'>
        {{ $networks->links() }}
      </div>
    </div>
  </body>

</html>