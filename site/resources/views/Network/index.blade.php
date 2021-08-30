<!-- 連絡網投稿 -->
<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
<html>
  <head>
    <meta charset="utf-8">
    <title>部員サイト</title>
    <link rel ="stylesheet" href="style.css">
  </head>

  <body>
    <h2 class = 'title_cite'>部員サイト</h2>

    <h2 class='title'>連絡網</h2>
    <div class='network_list'>
      <p></p>

      @foreach($networks as $network)
      <div class ='network_packet'>
        
        <p><a href>T i t l e 5</a>　　by 投稿者2　　投稿日：2021/08/05</p>
        <!-- <p class ='sentence_limit'>This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body. This is body.</p> -->
        <p class ='sentence_limit'>{{ $network->content }}</p>

      </div>

      @endforeach
      <p></p>      
      <div class ='paginate'>{{ $networks->links() }}</div>
    </div>
  </body>

</html>