<html>
  <body class="bg-secondary">
    @extends('layouts.NavBar')
    @section('content')

    <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <form action="{{route('users.update', $user->id)}}" method="post">

          @csrf
          @method('PUT')

          <h1>Formulário de Funcionários cadastro de usuario</h1>
          <button type="submit" class="btn btn-outline-primary">Salvar</button>

          <div class="d-flex flex-row gap-2">
            <div class="col-6">
              <label for="inputAddress2" class="form-label">Nome Completo</label>
              <input name='name' type="text" class="form-control" id="inputAddress2" value="{{$user->name}}">
              @error('name')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Cpf</label>
              <input name='cpf' type="text" class="form-control" id="inputAddress2" value="{{$user->cpf}}">
              @error('cpf')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Telefone</label>
              <input name=phone type="text" class="form-control" id="inputAddress2" value="{{$user->phone}}">
              @error('phone')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="inputAddress2" class="form-label">Login</label>
              <input name='email' type="text" class="form-control" id="inputAddress2" value="{{$user->email}}">
              @error('email')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input name='password' type="password" class="form-control" id="exampleInputPassword1" value="{{$user->password}}">
              @error('password')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="inputAddress2" class="form-label">Cargo</label>
              <select name='type' type="text" class="form-select" id="inputAddress2" value="{{$user->type}}">
                <option value="1" @if ($user->type) selected @endif>Empregado</option>
                <option value="0" @if (!$user->type) selected @endif>Gerente</option>
              </div>
            </div>

          </form>
        </div>
      </div>
      @endsection
  </body>
</html>
