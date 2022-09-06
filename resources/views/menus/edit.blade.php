<html>
<body class="bg-secondary">
@extends('layouts.NavBar')
@section('content')
<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
<form action="{{route('menus.update', $menu->id)}}" method="post">
  @csrf
  @method('PUT')
  <h1>Formulário de Edição do Cardápio</h1>
  <div><button type="submit" class="btn btn-primary">Salvar</button></div>
  <div class="d-flex flex-row gap-2">
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Cardápio</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$menu->name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Cardápio</label>
    <input name='Description' type="text" class="form-control" id="inputAddress2" value="{{$menu->descripition}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
    <select name='is_avaliable' type="text" class="form-select" id="inputAddress2" value="{{$menu->is_active}}">
      <option value="1" @if ($menu->is_avaliable) selected @endif>Disponivel</option>
      <option value="0" @if (!$menu->is_avaliable) selected @endif>Indisponível</option>
    </div>
</div>
  </div>
</div>
</form>
@endsection
</body>
</html>
