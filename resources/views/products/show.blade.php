@extends('layouts.NavBar')
@section('content')
<ul class="list-group">
<li class="list-group-item"><strong>#</strong>{{$product->id}}</li>
<li class="list-group-item"><strong>Nome</strong>{{$product->name}}</li>
<li class="list-group-item"><strong>Descrição</strong>{{$product->description}}</li>
<li class="list-group-item"><strong>Preço</strong>{{$product->price_cents}}</li>
<li class="list-group-item"><strong>Ativado/Desativado</strong>{{$product->is_avaliable ? 'Disponível' : 'Indisponível'}}</li>
</ul>
  <button type="submit" class="btn btn-primary">Salvar</button>
@endsection
