@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<h1>Formulário de Criação de Produtos</h1>
<form action="{{route('products.store')}}" method="post">
  <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
    <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
  @csrf
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Produto</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{old('name')}}">
  </div>

<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Produto</label>
    <input name='description' type="text" class="form-control" id="inputAddress2" value="{{old('descripion')}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Preço do Produto</label>
    <input name=price_cents type="text" class="form-control" id="inputAddress2" value="{{old('price_cents')}}">
  </div>
</div>
  <div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
    <input name='is_avaliable' type="text" class="form-control" id="inputAddress2">
  </div>
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>

</form>
</div>
</div>
@endsection
