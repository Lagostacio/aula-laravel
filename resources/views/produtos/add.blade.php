@extends('includes.base')

@section('title','Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    @if ($errors)
        @foreach($errors->all() as $erro)
            {{$erro}}
            <br>
        @endforeach
    @endif

    <form action="{{ route('produtos.addSave') }}" method='post'>
        @csrf
        <input type="text" name="name" value="{{old('name',$prod->name)}}" placeholder="Nome do Produto"><br>
        <input type="number" name="price" value='{{old('price',$prod->price)}}' step='0.01' placeholder="Preço" min='0'><br>
        <input type="number" name="quantity" value='{{old('quantity',$prod->quantity)}}' placeholder="Quantidade">
        <hr width='15%' color='purple' align='left'>
        <input type="submit" value="Gravar">
    </form>
@endsection
