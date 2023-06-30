<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("css/style.css")}}">
</head>
<body>

    <h1>Site Lindão</h1>
    {{-- usuario autenticado --}}
    <div>
        @if (Auth::user())
            Olá {{ Auth::user()->name }}
            <br>
            <a href="{{ route('logout') }}">10logar</a>
        @else
            <a href="{{ route('login') }}">Fazer login</a>
        @endif
    </div>
    <hr>

    @yield('content')

</body>
</html>
