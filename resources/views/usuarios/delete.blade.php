@extends('includes.base')

@section('content')
<h1>delete</h1>
<p>Tem certeza que deseja deletar {{$user->name}}?</p>

<form action="{{ route('usuarios.deleteForReal', $user->id) }}" method="post">

    @csrf
    @method('delete')

    <input type="submit" value="Apague imediatamente">
</form>

@endsection
