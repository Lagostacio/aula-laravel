@extends('includes.base')

@section('title','Usuarios')

@section('content')

<h1>olá usuarios</h1>

<table border='1'>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usrs as $usr)
            <tr>
                <td>{{$usr->name}}</td>
                <td>{{$usr->email}}</td>
                <td>{{$usr->password}}</td>
                <td>
                    <a href="{{route('usuarios.delete',$usr->id)}}" style='color:red;'>Deletar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{route('usuarios.add')}}">Adicionar usuario</a>

@endsection
