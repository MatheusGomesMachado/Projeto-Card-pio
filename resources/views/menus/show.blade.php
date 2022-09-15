<html>
<body class="bg-secondary">
  @extends('layouts.NavBar')
  @section('content')

  <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
    <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
      <h1>Formulário de Visualização de Cardápios</h1>
        <button type="submit" class="btn btn-outline-primary">Salvar</button>
        <td><a href="{{route('menus.edit', $menu->id)}}" type="button" class="btn btn-outline-primary">Editar</a></td>
        <ul class="list-group">
          <li class="list-group-item"><strong>#</strong>{{$menu->id}}</li>
          <li class="list-group-item"><strong>Nome</strong>{{$menu->name}}</li>
          <li class="list-group-item"><strong>Descrição</strong>{{$menu->description}}</li>
          <li class="list-group-item"><strong>Ativado/Desativado</strong>{{$menu->is_avaliable ? 'Disponível' : 'Indisponível'}}</li>
        </ul>
    <form action="{{route('menu.product.store', $menu->id)}}" method="POST" class="form-control">
      @csrf
      <div>
        <label for="selectproducts">Adicionar Produto:</label>
          <select class="from-select" id="selectproducts" name="product_id">
            @foreach($addableProducts as $product)
              <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="d-flex aling-items-end">
      <button type="submit" class="btn btn-success rouded" title="Adicionar Prato">
          <i class="bi bi clipboard-plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></i>
        </button>
      </div>
    </form>
    <table class="table">
      @foreach($menu->products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>R${{($product->price_cents)/100}}</td>
          <td>@if($product->is_avaliable)
              Disponível
            @else
              Indisponível
            @endif</td>
          <td><img src="{{asset('/storage'.$product->image_path)}}" widh="60" height="50"></td>
          <td>
            <form action="{{route('menu.product.destroy',[$menu->id, $product->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button>
</form>
</td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
  @endsection
</body>
</html>
