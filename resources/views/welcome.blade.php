<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .cell{
                display: inline-block;
                height:50px;
                width:50px;
                border: 1px solid black;
		margin-top: 0px;
            }
            .cell1{
                display: inline-block;
                height:50px;
                width:50px;
                border: 1px solid black;
		margin-top: 0px;
            }
            .cell2{
                display: inline-block;
                height:50px;
                width:50px;
                border: 1px solid black;
		margin-top: 0px;
            }
	.circle {
	width: 50px;
	height: 50px;
	background: red;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	border-radius: 50px;
	}
	.triangle {
	width: 0;
	height: 0;
	border-left: 25px solid transparent;
	border-right: 25px solid transparent;
	border-bottom: 50px solid black;
	}


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel <input type="button" onclick='window.location.href = 'https://stackoverflow.com';)' value="Rafraichir"/>
                </div>
                @foreach ($game->board as $row)
                    @foreach ($row as $cell)
                        @if ($cell == null)
                            <a class="cell" href="{{ route('play', ['x' => $loop->index,'y' => $loop->parent->index]) }}"></a>
                        @else
			@if ($cell == $game->player1)
			<div class="cell" ><div class="circle"></div></div>
			@else
			<div class="cell" ><div class="triangle"></div></div>
			@endif
                            
                        @endif
                    @endforeach
                    <br/>
                @endforeach
            </div>
        </div>
    </body>
</html>
