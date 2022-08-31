@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
    <h1>Formulário de Visualização de Funcionários</h1>
<h1 class="btn btn-purple">Aline</h1>
<ul class="list-group">
<li class="list-group-item"><strong>#</strong>{{$user->id}}</li>
<li class="list-group-item"><strong>Nome</strong>{{$user->name}}</li>
<li class="list-group-item"><strong>E-mail</strong>{{$user->email}}</li>
<li class="list-group-item"><strong>Telefone</strong>{{$user->phone}}</li>
<li class="list-group-item"><strong>CPF</strong>{{$user->cpf}}</li>
<li class="list-group-item"><strong>Tipo</strong>{{$user-type}}</li>
</ul>
  <button type="submit" class="btn btn-primary">Salvar</button>
  <td><a href="{{route('products.edit', $product->id)}}" type="button" class="btn btn-outline-primary">Editar</a></td>
@endsection
