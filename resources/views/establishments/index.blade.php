<html>
  <body class="bg-secondary">

@extends('layouts.NavBar')
@section('content')

  <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
    <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <h1>Gerenciamento de Dados da Empresa</h1>
        <a class="btn btn-dark bg-primary" href="{{route('establishments.create')}}">Criar</a>

          <div class="d-flex flex-row gap-2">
            <div class="col-12">
              <label for="inputAddress" class="form-label">CNPJ</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="XX. XXX. XXX/0001-XX.">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Gerentes</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-4">
              <label for="inputAddress2" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="inputAddress2">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-md-2">
              <label for="inputCity" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
          </div>
      </div>
    </div>
@endsection
</body>
</html>
