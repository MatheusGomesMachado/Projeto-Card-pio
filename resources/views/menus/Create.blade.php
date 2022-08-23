@extends('layouts.NavBar')
@section('content')
<h1>Formulário de Criação do Cardápio</h1>
<form action="{{route('menu.store'}}" method="post">
  @csrf
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Cardápio</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$menu->name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Cardápio</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2" value="{{$menu->descripition}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
    <input name='email' type="text" class="form-control" id="inputAddress2" value="{{$menu->is_active}}">
  </div>
</div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>
@endsection
