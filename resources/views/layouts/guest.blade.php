<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}"> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            .flip-container {
	-webkit-perspective: 1000;
	/* width: 100px; */
}
.flipper {
	transition: 0.6s;
	-webkit-transform-style: preserve-3d;
	position: relative;
	/* height: 200px; */
}
.front,
.back {
	/* width: 400px;
	height: 200px; */
	position: absolute;
	left: 0;
	top: 0;
	-webkit-backface-visibility: hidden;
	color: #fff;
	text-shadow: 1px 1px #000;
	font-size: 2em;
	line-height: 200px;
	text-align: center;
}
.back {
	-webkit-transform: rotateY(180deg);
}
.front {
	z-index: 2;
}
.flip-container p {
	margin: 10px 0;
	text-align: center;
}
/* Flip Animation */
@keyframes flipX{
    from {
        -webkit-transform: rotateX(180deg);
    }
    
    to {
        -webkit-transform: rotateX(-180deg);
    }
    
}
@keyframes flipY{
    from {
        -webkit-transform: rotateY(180deg);
    }
    
    to {
        -webkit-transform: rotateY(-180deg);
    }
    
}
.flip-container .flipper {
	animation: flipY 3s infinite;
}
.vertical-flip-container .flipper{
	animation: flipX 4s infinite;
}
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
