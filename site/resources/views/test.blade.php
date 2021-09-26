@extends('layouts.app')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>@yield('title')部員サイト</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
  
  <script>
    $('.delete-confirm').click(function(){
        $('#deletebtn').val( $(this).val() );
    });
</script>
  
</head>

<body>
  
  
  @section('content')
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item"><a class="nav-link active" href="/home">　Home　</a></li>
    <li class="nav-item"><a class="nav-link" href="/monthly_schedule/1">　今後の予定一覧　</a></li>
    <li class="nav-item"><a class="nav-link" href="/record">　練習録音　</a></li>
    <li class="nav-item"><a class="nav-link" href="/network">　連絡網　</a></li>
  </ul><br>
  
  <div class='container'>
  <div class="card text-center w-75 mx-auto">
    <div class="flex-center position-ref full-height">
      <div class ='card-body'>
        <p>[<a href="/">このスケジュールを編集</a>]</p>
        <h1 class='card-title'>活動日予定</h1>
        <p class = 'card-subtitle text-muted'>updated_at</p>
        <p class = 'text-muted'> email</p>
        <h3>content</h3>
        
        
        <div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
                <label>本当に削除しますか？</label>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Cancel" class="btn btn-secondary" data-dismiss="modal" >
                <input type="submit" value="OK" id="deletebtn" class="btn btn-primary" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  @endsection
  
</body>
