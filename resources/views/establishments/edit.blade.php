@extends('layouts.NavBar')

@section('content')
<h1>Formulário de Edição de Dados da Empresa</h1>
<form action="{{route('establishments.update', $establishment->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="col-6">
    <label for="inputAddress2" class="form-label">CNPJ</label>
    <input name='cnpj' type="text" class="form-control" id="inputAddress2" value="{{$establishment->cnpj}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Nome do Estabelecimento</label>
    <input name='trading_name' type="text" class="form-control" id="inputAddress2" value="{{$establishment->trading_name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Nome da Companhia </label>
    <input name='company_name' type="text" class="form-control" id="inputAddress2" value="{{$establishment->company_name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input name='phone' type="text" class="form-control" id="inputAddress2" value="{{$establishment->phone}}">
  </div>
  <div class="d-flex flex-row gap-2">
    <div class="col-5">
      <label for="inputAddress2" class="form-label">Endereço</label>
      <input name='address' type="text" class="form-control" id="inputAddress2" value="{{$establishment->address}}">
    </div>
  </div>
</form>


  @endsection
