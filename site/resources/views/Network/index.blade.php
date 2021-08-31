<!-- 連絡網投稿 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style_network.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

    <h2 class='title'>連絡網</h2>
    <div class='network_list'>
      <p></p>
      
      <div class ='network_packet'>
        @foreach($networks as $network)
        <p><a href>{{ $network->title }}</a>　　by 投稿者2　　投稿日：{{ $network->updated_at }}</p>
        <!--<p><a href>T i t l e 5</a>　　by 投稿者2　　投稿日：2021/08/05</p>-->
        <!-- <p class ='sentence_limit'>This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body.</p> -->
        <p class ='sentence_limit'>{{ $network->content }}</p>
        @endforeach
      </div>
      
      <p></p>
      <div class ='paginate'>
        {{ $networks->links() }}
      </div>
    </div>
  </body>

</html>