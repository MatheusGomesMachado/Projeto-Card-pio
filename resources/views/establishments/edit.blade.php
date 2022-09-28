<html>
  <body class="bg-secondary">

    @extends('layouts.NavBar')
    @section('content')

    <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <form action="{{route('establishments.update', $establishment->id)}}" method="post">

          @csrf
          @method('PUT')

          <h1>Formulário de Edição de Dados da Empresa</h1>
          <button type="submit" class="btn btn-primary">Salvar</button>

          <div class="d-flex flex-row gap-2">
            <div class="col-6">
              <label for="inputAddress2" class="form-label">CNPJ</label>
              <input name='cnpj' type="text" class="form-control" id="inputAddress2" value="{{old('cnpj', $establishment->cnpj)}}">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Nome do Estabelecimento</label>
              <input name='trading_name' type="text" class="form-control" id="inputAddress2" value="{{old('trading_name', $establishment->trading_name)}}">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Nome da Companhia </label>
              <input name='company_name' type="text" class="form-control" id="inputAddress2" value="{{old('company_name', $establishment->company_name)}}">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="inputAddress2" class="form-label">Telefone</label>
              <input name='phone' type="text" class="form-control" id="inputAddress2" value="{{old('phone', $establishment->phone)}}">
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Endereço</label>
              <input name='address' type="text" class="form-control" id="inputAddress2" value="{{old('address', $establishment->address)}}">
            </div>
          </div>
        </form>
      </div>
    </div>
    @endsection
  </body>
</html>
