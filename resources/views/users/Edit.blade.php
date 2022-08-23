@extends('layouts.NavBar')

@section('content')
<h1>Formulário de Funcionários cadastro de usuario</h1>
<form action="{{route('user.update', $user->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome Completo</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$user->name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Cpf</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2" value="{{$user->cpf}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input name=phone type="text" class="form-control" id="inputAddress2" value="{{$user->phone}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Login</label>
    <input name='email' type="text" class="form-control" id="inputAddress2" value="{{$user->email}}">
  </div>
  <div class="col-5 gap-2">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input name='password' type="password" class="form-control" id="exampleInputPassword1" value="{{$user->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>

</form>
@endsection
