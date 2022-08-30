@extends('layouts.NavBar')
@section('content')
<div container class=" w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
    <h1>Pedidos</h1>
  <a class="btn btn-dark bg-white" href="{{route('orders.create')}}">Criar</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">N° Mesa</th>
      <th scope="col">Status</th>
      <th scope="col">Data</th>
      <th scope="col">Itens</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
      @foreach($orders as $order)
    <tr>
      <th scope="row">1</th>
      <td>Em andamento</td>
      <td>Data do Pedido</td>
      <td>X-Tudo</td>
      <td><a href="{{route('orders.edit', $order->id)}}">Editar</a></td>
      <td><a href="{{route('orders.destroy',$order->id)}}" type="button" class="btn btn-outline-danger">Excluir</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
</body>
</html>
