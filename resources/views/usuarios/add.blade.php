@extends('includes.base')

@section('content')

<h1>add usuarios</h1>

<form action="{{route('usuarios.addSave')}}" method='POST'>
    @csrf

    nome:<input type="text" name="name"><br>
    email:<input type="email" name="email" id=""><br>
    senha:<input type="password" name="password" id=""><br>
    <input type="submit" value="enviar">
</form>

@endsection
