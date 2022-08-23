@extents('NavBar')
@section('content')
  <div container class=" w-100 position-absolute d-flex justify-content-center aling-items-center">
    <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
      <h1>Cardápios</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cardápios</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ativado/Desativado</th>
            <th scope="col">Ver/Editar</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($menus as $menu)
            <th scope="row">1</th>
            <td>{{$menu->name}}</td>
            <td>{{$menu->description}}</td>
            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Editar</button>
            </td>
            <td><a href="{{route('menu.destroy',$menu->id)}}" type="button" class="btn btn-outline-danger">Excluir</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection
</body>
</html>
