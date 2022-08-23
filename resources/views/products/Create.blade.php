@extends('layouts.NavBar')
@section('content')
<h1>Formulário de Criação de Produtos</h1>
<form action="{{route('product.store')}}" method="post">
  @csrf
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Produto</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$product->name}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Produto</label>
    <input name='cpf' type="text" class="form-control" id="inputAddress2" value="{{$product->descripition}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Preço do Produto</label>
    <input name=phone type="text" class="form-control" id="inputAddress2" value="{{$product->price_cents}}">
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
    <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
    <input name='email' type="text" class="form-control" id="inputAddress2" value="{{$product->is_avaliable}}">
  </div>
    <button type="submit" class="btn btn-primary">Criar</button>

</form>
@endsection
