<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
     <title>部員サイト</title> 
    <link rel ="stylesheet" href="style_record.css">
  </head>
  <body>
    <h2>部員サイト</h2>
    <div class="context">
      <p></p>
      <h2 class="title">録音一覧</h2>
      
      <div class="record_list">
        
        <p class="filename">ファイル名</p>
        <p class="date">更新日時</p>
        <p class="person">更新者</p>
        <p></p>
        @foreach($records as $record)
        <div class='record_index'>
          <p class='title'>{{ $record->title }}</p>
          <!-- タイトルにURLを紐づけたい -->
          <p class='updated_at'>{{ $record->updated_at }}</p>
          <p class='person'>{{ $record->person }}</p>
        </div>
        @endforeach
      </div>
      <p></p>
    </div>
    <div class ='paginate'>
      {{ $records->links() }}
    </div>
  </body>
  
</html>