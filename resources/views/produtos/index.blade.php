@extends('includes.base')

@section('title',"Produtos")

@section('content')
    <p>Produtos Funcionando</p>
    <table border='1' style='border-color:purple;background-color:pink;color:purple;'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prods as $p)
            <tr>
                <td><a href='{{ route('produtos.view',$p->id)}}'>{{$p->name}}</a></td>
                <td>R${{ number_format($p->price, 2, ',')}}</td>
                <td>{{$p->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produtos.add') }}"> Adicionar produto</a>
@endsection
