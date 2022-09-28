<html>
  <body class="bg-secondary">

    @extends('layouts.NavBar')
    @section('content')

    <div container class="w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <form action="{{route('menus.store')}}" method="post">

          @csrf

        <h1>Formulário de Criação do Cardápio</h1>
        <button type="submit" class="btn btn-outline-primary">Criar</button>

          <div class="d-flex flex-row gap-2">
            <div class="col-6">
              <label for="inputAddress2" class="form-label">Nome do Cardápio</label>
                <input name='name' type="text" class="form-control" id="inputAddress2" value="{{old('name')}}">
                  @error('name')
                <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5">
              <label for="inputAddress2" class="form-label">Descrição do Cardápio</label>
                <input name='description' type="text" class="form-control" id="inputAddress2" value="{{old('description')}}">
                  @error('description')
                <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="d-flex flex-row gap-2">
            <div class="col-5 gap-2">
              <label for="inputAddress2" class="form-label">Ativo/Desativado</label>
                <select name='is_active' type="text" class="form-control" id="inputAddress2" value="{{old('is_active')}}">
                  <option value="1">Disponivel</option>
                  <option value="0">Indisponível</option>
                </select>
                  @error('is_active')
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
