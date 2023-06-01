@extends('includes.base')

@section('title','Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    <form action="{{ route('produtos.addSave') }}" method='post'>
        @csrf
        <input type="text" name="name" id="" placeholder="Nome do Produto"><br>
        <input type="number" name="price" id="" step='0.01' placeholder="Preço" min='0'><br>
        <input type="number" name="quantity" id="" placeholder="Quantidade">
        <hr width='15%' color='purple' align='left'>
        <input type="submit" value="Gravar">
    </form>
@endsection
