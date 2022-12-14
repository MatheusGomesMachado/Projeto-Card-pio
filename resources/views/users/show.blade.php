<html>
  <body class="bg-secondary">
    @extends('layouts.NavBar')
    @section('content')

    <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">

        <h1>Formulário de Visualização de Funcionários</h1>
        <button type="submit" class="btn btn-outline-primary">Salvar</button>
        
        <td><a href="{{route('users.edit', $user->id)}}" type="button" class="btn btn-outline-primary">Editar</a></td>
        <ul class="list-group">
          <li class="list-group-item"><strong>#</strong>{{$user->id}}</li>
          <li class="list-group-item"><strong>Nome</strong>{{$user->name}}</li>
          <li class="list-group-item"><strong>E-mail</strong>{{$user->email}}</li>
          <li class="list-group-item"><strong>Telefone</strong>{{$user->phone}}</li>
          <li class="list-group-item"><strong>CPF</strong>{{$user->cpf}}</li>
          <li class="list-group-item"><strong>Tipo</strong>{{$user->type}}</li>
        </ul>
      </div>
    </div>
    @endsection
  </body>
</html>
