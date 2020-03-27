@extends('layouts.admin_app')
@section('content')
<div class="container">
  <div class="col-10 mx-auto">

  <div class="card px-5">
    <div class="card-body pl-2">
      <p class="lead mb-0 text-secondary">Lista de Etiquetas <a href="{{route('admin.tags.create')}}" class="text-success"><ins>Crear Nueva</ins></a></p>
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
                @foreach($tags as $tag)
                <tr>
                  <td>{{$tag->id}}</td>
                  <td>{{$tag->name}}</td>
                  <td>                  
                    <div class="d-inline text-right">
                        <a href="{{route('admin.tags.show',$tag->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
                        <a href="{{route('admin.tags.edit',$tag)}}"><button class="btn btn-sm btn-outline-primary">Editar</button></a>           
                        <form class="d-inline" action="{{ route('admin.tags.destroy',$tag->id) }}" method="POST">
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
            {{$tags->links()}}
      </div>
  </div>
</div>    



</div>
@endsection