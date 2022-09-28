<html>
  <body class="bg-secondary">

    @extends('layouts.NavBar')

    @section('content')

    <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <form action="{{route('establishments.store')}}" method="post">

          @csrf

          <h1>Formulário de Criação de Dados da Empresa</h1>
          <button type="submit" class="btn btn-primary">Criar</button>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">CNPJ</label>
              <input name='cnpj' type="text" class="form-control" id="inputAddress2">
              @error('cnpj')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Nome do Estabelecimento</label>
              <input name='trading_name' type="text" class="form-control" id="inputAddress2">
              @error('trading_name')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Nome da Companhia </label>
              <input name='company_name' type="text" class="form-control" id="inputAddress2">
              @error('company_name')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="inputAddress2" class="form-label">Telefone</label>
              <input name='phone' type="text" class="form-control" id="inputAddress2">
              @error('phone')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Foto</label>
              <input name='image' type="file" class="form-control" accept="image/jpeg">
              @error('image')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Endereço</label>
              <input name='address' type="text" class="form-control" id="inputAddress2">
              @error('address')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </form>
      </div>
    </div>
    @endsection
  </body>
</html>
