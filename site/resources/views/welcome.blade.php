<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YNUSB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: cornflowerblue;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            ul{
                width:500px;
            }
            
            li{
                border-bottom:1px solid #ccc;
                list-style:none;
            }
            
            a{
                text-decoration:none;
                display: block;
                padding: 10px 0;
            }
            
            a:hover{
                background-color:#ccc;
            }

            span{
                color:#000000;   //黒
                vertical-align: middle;
                display: inline-block;
                margin-right: 10px;
            }
            
            p{
                color: #131313;
                display: inline-block;
                margin: 0;
                padding: 0;
                vertical-align: middle;
            }
            
            .box{
                font-weight:bold;
                padding: 0.5em 1em;
                margin: 0.0em 0;
                color: #fff;
                background: #c9e4ff; /*背景色*/
            }
            
            .col-1 {
                display: inline-block;
                width: 100px;
                /* border: solid 1px; */
            }
            
            .col-2 {
                display: inline-block;
                width: 300px;
                /* border: solid 1px; */
            }
            
            
            .btn-flat-border {
                display: inline-block;
                padding: 0.3em 1em;
                text-decoration: none;
                font-weight:bold;
                color: #67c5ff;
                border: solid 2px #67c5ff;
                border-radius: 3px;
                transition: .4s;
            }

            .btn-flat-border:hover {
                background: #67c5ff;
                color: white;
            }
            
        </style>
    </head>
    
    <body>
        <div class="flex-center position-ref full-height">
            <!--@if (Route::has('login'))-->
            <!--    <div class="top-right links">-->
            <!--        @auth-->
            <!--            <a href="{{ url('/home') }}">{{ __('Home') }}</a>-->
            <!--        @else-->
            <!--            <a href="{{ route('login') }}">{{ __('Login') }}</a>-->

            <!--            @if (Route::has('register'))-->
            <!--                <a href="{{ route('register') }}">{{ __('Register') }}</a>-->
            <!--            @endif-->
            <!--        @endauth-->
            <!--    </div>-->
            <!--@endif-->

            <div class="content">
                <div class="title m-b-md">
                    Y N U S B
                </div>
                
                <!--<input type="button" class="btn-flat-border" value="H  O  M  E" formenctype="/home">-->
                <a href="/home" class="btn-flat-border">HOME</a>
                <br><br><br>

                <!--<div class="links">-->
                <!--    <a href="https://laravel.com/docs">Docs</a>-->
                <!--    <a href="https://laracasts.com">Laracasts</a>-->
                <!--    <a href="https://laravel-news.com">News</a>-->
                <!--    <a href="https://blog.laravel.com">Blog</a>-->
                <!--    <a href="https://nova.laravel.com">Nova</a>-->
                <!--    <a href="https://forge.laravel.com">Forge</a>-->
                <!--    <a href="https://vapor.laravel.com">Vapor</a>-->
                <!--    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                <!--</div>-->
                
                <h5>ここ２日間での新着情報</h5>
                
                <ul>

                    @if($todayCount > 0)
                        <li>
                            <a href="/home"><span class="col-1"><div class="box">Today</div></span><span class="col-2">{{ $todayCount }}件の新しい投稿があります</span></a>
                        </li>
                    @else
                    {{-- 中身無し --}}
                    @endif


                    @if($monthlyCount > 0)
                        <li>
                            <a href="/monthly_schedule/1"><span class="col-1"><div class="box">Monthly</div></span><span class="col-2">{{ $monthly->updated_at }} に更新があります</span></a>
                        </li>
                    @else
                    {{-- 中身無し --}}
                    @endif
                    
                    
                    @if($recordCount > 0)
                        <li>
                            <a href="/record"><span class="col-1"><div class="box">Record</div></span><span class="col-2">{{ $recordCount }}件の新しい投稿があります</span></a>
                        </li>
                    @else
                    {{-- 中身無し --}}
                    @endif
                    
                    
                    @if($networkCount > 0)
                        <li>
                            <a href="/network"><span class="col-1"><div class="box">Network</div></span><span class="col-2">{{ $networkCount }}件の新しい投稿があります</span></a>
                        </li>
                    @else
                    {{-- 中身無し --}}
                    @endif
                    
                </ul>
                
            </div>
        </div>
    </body>
</html>
