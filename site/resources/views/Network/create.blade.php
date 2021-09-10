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
        <li><a href="/monthly_schedule">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>
    
    <div class='network_list'><br>
      <h2 class='title'>連絡網</h2>
      
      <form action="/network" method="POST">
          @csrf
          <div class="network_list">
              <h1 class = 'title'>新規投稿_連絡網</h1>
              
              <!-- タイトル入力 -->
              <h4>タイトル</h4>
              <input type="text" name="network[title]" placeholder="タイトルを入力" value="{{ old('network.title') }}" >
              <p class="title_error" style="color:red">{{ $errors->first('network.title') }}</p>
              
              <!-- 連絡内容入力 -->
              <h4>連絡内容</h4>
              <textarea name="network[content]" placeholder="連絡事項を記入してください" value="{{ old('network.content') }}"></textarea>
              <p class="content_error" style="color:red">{{ $errors->first('network.content') }}</p><br><br>
              
              <input type="submit" value="投稿" /><br><br>
      </form>
      
      
      <br>
      
      <p></p>
      
    </div>
    <a href="/network">戻る</a>
  </body>

</html>