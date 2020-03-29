@extends('layouts.admin_app')
@section('content')
<div class="container">
  <div class="col-10 mx-auto">

  <div class="card px-5">
    <div class="card-body pl-2">
      <p class="lead mb-0 text-secondary">Lista de Categorías <a href="{{route('admin.categories.create')}}" class="text-success"><ins>Crear Nueva</ins></a></p>
    </div>
    <div class="row">
       
          <table class="table table-striped text-secondary">
              <thead>
                <tr>
                  <th >ID</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>                  
                    <div class="d-inline text-right">
                        <a href="{{route('admin.categories.show',$category->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
                        <a href="{{route('admin.categories.edit',$category)}}"><button class="btn btn-sm btn-outline-primary">Editar</button></a>           
                        <form class="d-inline" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$categories->links()}}
      </div>
  </div>
</div>
</div>
@endsection