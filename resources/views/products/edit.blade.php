@extends('layouts.NavBar')
@section('content')

<form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
    <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
      <h1>Formulário de Edição de Produtos</h1>

<div class="d-flex flex-row gap-2">
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nome do Produto</label>
    <input name='name' type="text" class="form-control" id="inputAddress2" value="{{old('name', $product->name)}}">
    @error('name')
    <div class="text-danger">
      {{ $massage }}
    </div>
    @enderror
  </div>
</div>
<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Descrição do Produto</label>
    <input name='description' type="text" class="form-control" id="inputAddress2" value="{{old('descripion', $product->description)}}">
    @error('description')
    <div class="text-danger">
      {{ $massage }}
    </div>
    @enderror
  </div>
  </div>

<div class="d-flex flex-row gap-2">
  <div class="col-5">
    <label for="inputAddress2" class="form-label">Preço do Produto</label>
    <input name='price_cents' type="text" class="form-control" id="inputAddress2" value="{{old('name', $product->price_cents)}}">
    @error('price_cents')
    <div class="text-danger">
      {{ $massage }}
    </div>
    @enderror
  </div>
  </div>

<div class="d-flex flex-row gap-2">
  <div class="col-5 gap-2">
      <button type="submit" class="btn btn-primary">Salvar</button>
    <label for="inputAddress2" class="form-label">Disponibilidade</label>
    <select class="from-select" name="is_avaliable" aria-label="Disponibilidade do prato" id="inputAddress2" value="{{$product->is_avaliable}}">
      <option value="1" @if ($product->is_avaliable) selected @endif>Disponivel</option>
      <option value="0" @if (!$product->is_avaliable) selected @endif>Indisponível</option>
      <button type="submit" class="btn btn-primary">Salvar</button>
   </div>
  </div>
    </div>
      </div>




</form>
@endsection
