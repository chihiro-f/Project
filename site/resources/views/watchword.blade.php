<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset='utf-8'>
    <!-- <title>部員サイト</title> -->
    <link rel ="stylesheet" href="style.css">
  </head>
  
  <body>
    <h2>部員サイト</h2>
    <div class="block_login">
      <h3>編集にはあいことばの入力が必要です</h3>
      <h5>あいことば</h5>
      
      <form action="/today" method="POST">
        @csrf
        <input type="text" placeholder="入力してください"><br>
        <input type="submit" value="ログイン" /><br>
      </form>
    </div>
  </body>
  
</html>