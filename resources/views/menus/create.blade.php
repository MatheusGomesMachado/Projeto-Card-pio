@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<h1>Formulário de Criação do Cardápio</h1>
<form action="{{route('menus.store'}}" method="post">
  @csrf
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Cardápio</label>
    <input name='name' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Cardápio</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
    <input name='email' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>
</div>
@endsection
