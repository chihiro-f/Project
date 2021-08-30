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
      <h3>ユーザーログイン</h3>
      <h5>ID</h5>
      <input type="text" placeholder="IDを入力">
      <h5>パスワード</h5>
      <p><input type="text" placeholder="パスワードを入力" /></p>
      <input type="submit" value="ログイン" />
      <p></p>
    </div>
  </body>
</html>