<html>
  <body class="bg-secondary">
    <div container class=" w-100 position-absolute d-flex justify-content-center aling-items-center">
      <div class="p-4 mx-4 my-4 w-100 w-sm-100 bg-light">
        <h1>Cardápios</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cardápios</th>
            <th scope="col">Descrição</th>
        </thead>
        @foreach($menus as $menu)
        <th scope="row">1</th>
          <td>{{$menu->name}}</td>
          <td>{{$menu->description}}</td>
        @endforeach
      </table>
