@extends('layouts.NavBar')

@section('content')
<h1>Formulário de Edição de produtos</h1>
<form action="{{route('order.update', $order->id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome Completo</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$order->name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Cpf</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2" value="{{$order->cpf}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input name=phone type="text" class="form-control" id="inputAddress2" value="{{$order->phone}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Login</label>
    <input name='email' type="text" class="form-control" id="inputAddress2" value="{{$order->email}}">
  </div>
  <div class="col-5 gap-2">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input name='password' type="password" class="form-control" id="exampleInputPassword1" value="{{$order->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>

</form>
@endsection
