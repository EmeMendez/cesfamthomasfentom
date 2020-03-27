@extends('layouts.admin_app')
@section('content')
<div class="container">
  <h3 class="text-secondary text-center">Tags Posts</h3>
  <div class="row">
    <div class="col-8 mx-auto">
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
              @foreach($tags as $tag)
              <tr>
                <th scope="row">{{$tag->id}}</th>
                <td scope="row">{{$tag->name}}</td>
                <td scope="row">
                  <button class="btn btn-danger">Eliminar</button>
                </td>
                <td scope="row">
                  <button class="btn btn-info">Editar</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>
@endsection