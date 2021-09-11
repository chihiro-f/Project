<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
     <title>部員サイト</title> 
     <link href="{{secure_asset('/css/style_record.css')}}" rel="stylesheet">
  </head>
  
  <body>
    <h2 class='title_cite'>部員サイト</h2>
    
    <header>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/monthly_schedule/1">今後の予定一覧</a></li>
        <li><a href="/record">練習録音</a></li>
        <li><a href="/network">連絡網</a></li>
      </ul>
    </header>
    
    <div class="context"><br>
      <h1 class="title">録音一覧</h1>
      
      <div class ="record_list">
      <table border="1">
        @if ($records->count() > 0)
          <tr>
          <th>ファイル名</th>
          <th>更新日時</th>
          <th>更新者</th>
          </tr>
          @foreach($records as $record)
            <tr align="center">
              <td><a href="">{{ $record->title }}</a></td>
              <td>{{ $record->updated_at }}</td>
              <td>{{ $record->person }}</td>
            </tr>
          @endforeach
        @else
            録音データがありません
        @endif
        
      </table>
      <p></p>
      
      </div>
      
    </div>
    
    <div class ='paginate'>
      {{ $records->links() }}
    </div>
  </body>
  
</html>