@extents('NavBar')
@section('content')

<div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
    <h1>Produtos</h1>
      <button type="submit" class="btn btn-dark bg-white"><a href="CriarProdutos.html">Criar</a></button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Ativado/Desativado</th>
          <th scope="col">Ver/Editar</th>
          <th scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">1</th>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price_cents}}</td>
          <td>{{$product->is_avaliable}}</td>
          <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
          <td><a href="{{route('product.destroy',$product->id)}}" type="button" class="btn btn-outline-danger">Excluir</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
</body>
</html>
