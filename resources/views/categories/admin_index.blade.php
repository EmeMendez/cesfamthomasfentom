@extends('layouts.admin_app')
@section('content')
<div class="container">
  <h3 class="text-center text-secondary">Categorías Posts</h3>
  <div class="row">
    <div class="col-9 mx-auto">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
            <td scope="row">{{$category->name}}</td>
            <td scope="row"><button class="btn btn-danger">Eliminar</button></td>
            <td scope="row"><button class="btn btn-info">Editar</button></td>
    
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection