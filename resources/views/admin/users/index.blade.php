@extends('layouts.admin_app')
@section('content')
<div class="container">
  <div class="col-10 mx-auto">

  <div class="card px-5">
    <div class="card-body pl-2">
      <p class="lead mb-0 text-secondary">Lista de Usuarios <a href="{{route('admin.users.create')}}" class="text-success"><ins>Crear Nuevo</ins></a></p>
    </div>
    <div class="row">
       
          <table class="table table-striped text-secondary">
              <thead>
                <tr>
                  <th >ID</th>
                  <th>Nombre</th>
                  <th>E-mail</th>               
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $tags)
                <tr>
                  <td>{{$tags->id}}</td>
                  <td>{{$tags->name}}</td>
                  <td>{{$tags->email}}</td>
                  <td>                  
                    <div class="d-inline text-right">
                        <a href="{{route('admin.users.show',$tags->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
                        <a href="{{route('admin.users.edit',$tags)}}"><button class="btn btn-sm btn-outline-primary">Editar</button></a>           
                        <form class="d-inline" action="{{ route('admin.users.destroy',$tags->id) }}" method="POST">
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
            {{$users->links()}}
      </div>
  </div>
</div>    



</div>
@endsection