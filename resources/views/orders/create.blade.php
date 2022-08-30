
@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<h1>Formulário de Criação de Produtos</h1>
<form action="{{route('orders.store')}}" method="post">
  @csrf
<div class="col-6">
  <label for="inputAddress2" class="form-label">Mesa</label>
  <input type="text" class="form-control" id="inputAddress2">
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Pedido</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Data do Pedido</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Hora do Pedido</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="col-10">
  <label for="inputAddress2" class="form-label">Status</label>
  <input type="text" class="form-control" id="inputAddress2">
</div>
<div class="col-10">
  <label for="inputAddress2" class="form-label">Descrição</label>
  <input type="text" class="form-control" id="inputAddress2">
</div>
<button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>
</div>
@endsection
