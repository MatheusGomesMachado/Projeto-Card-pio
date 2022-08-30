
@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<h1>Formulário de Funcionários cadastro de usuario</h1>
<form action="{{route('users.store')}}" method="post">
  @csrf
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome Completo</label>
    <input name='name' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Cpf</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input name=phone type="text" class="form-control" id="inputAddress2">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Login</label>
    <input name='email' type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="col-5 gap-2">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input name='password' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
</div>
</div>
@endsection
