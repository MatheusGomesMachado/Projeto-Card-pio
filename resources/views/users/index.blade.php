@extents('NavBar')
@section('content')
<div container class=" w-100 position-absolute d-flex justify-content-center aling-items-center">
  <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
    <h1>Funcionários</h1>
    <button type="submit" class="btn btn-dark bg-white"><a href="CriarFuncionario.html">Criar</a></button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Funcionários</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">CPF</th>
          <th scope="col">Tipo</th>
          <th scope="col">Editar</th>
          <th scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">1</th>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->cpf}}</td>
          <td>{{$user->tipo}}</td>
          <td> <a href="{{route('user.edit', $user->id)}}">Editar</a></td>
          <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Funcionarios">Editar</button></td>
          <td><button type="button" class="btn btn-outline-danger">
              <div class="modal-dialog modal-lg">Excluir</div>
            </button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
  @endsection
</body>
</html>
