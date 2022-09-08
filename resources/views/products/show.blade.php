<html>
  <body class="bg-secondary">
@extends('layouts.NavBar')
@section('content')

<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
    <h1>Formulário de Visualização de Produtos</h1>
    <ul class="list-group">
      <li class="list-group-item"><strong>#</strong>{{$product->id}}</li>
      <li class="list-group-item"><strong>Nome</strong>{{$product->name}}</li>
      <li class="list-group-item"><strong>Descrição</strong>{{$product->description}}</li>
      <li class="list-group-item"><strong>Preço</strong>{{$product->price_cents}}</li>
      <li class="list-group-item"><strong>Ativado/Desativado</strong>{{$product->is_avaliable ? 'Disponível' : 'Indisponível'}}</li>
    </ul>
    <button type="submit" class="btn btn-primary">Salvar</button>
  <td><a href="{{route('products.edit', $product->id)}}" type="button" class="btn btn-outline-primary">Editar</a></td>
  </div>
</div>
@endsection
  </body>
</html>
