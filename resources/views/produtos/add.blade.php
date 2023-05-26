@extends('includes.base')

@section('title','Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    <form action="{{ route('produtos.addSave') }}" method='post'>
        @csrf
        Nome: <input type="text" name="name" id=""><br>
        Preço: <input type="number" name="price" id="" step='0.01'><br>
        Quantidade: <input type="number" name="quantity" id="">
        <hr width='15%' color='purple' align='left'>
        <input type="submit" value="Gravar">
    </form>
@endsection
