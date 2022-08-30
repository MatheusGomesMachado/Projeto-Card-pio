@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<h1>Formulário de Criação de Dados da Empresa</h1>
<form action="{{route('establishments.store')}}" method="post">
  @csrf
  <label for="inputAddress2" class="form-label">CNPJ</label>
  <input name='name' type="text" class="form-control" id="inputAddress2">
</div>
</div>
<div class="d-flex flex-row gap-2">
<div class="col-5">
  <label for="inputAddress2" class="form-label">Nome do Estabelecimento</label>
  <input name='cpf' type="text" class="form-control" id="inputAddress2">
</div>
</div>
<div class="d-flex flex-row gap-2">
<div class="col-5">
  <label for="inputAddress2" class="form-label">Nome da Companhia </label>
  <input name=phone type="text" class="form-control" id="inputAddress2">
</div>
</div>
<div class="d-flex flex-row gap-2">
<div class="col-5 gap-2">
  <label for="inputAddress2" class="form-label">Telefone</label>
  <input name='email' type="text" class="form-control" id="inputAddress2">
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Endereço</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>
</div>
@endsection
