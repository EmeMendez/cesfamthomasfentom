@extends('layouts.admin_app')
@section('content')
<div class="container">
  <div class="col-10 mx-auto">

  <div class="card px-5">
  {{-- star search --}}
    <div class="row py-3 align-items-center">
      <div class="col-9 pl-2">
        <p class="h4 text-secondary font-weight-bold">Lista de Usuarios </p>
      </div>
      <div class="col-3 text-right pr-2">
        <a href="{{route('admin.users.create')}}" class="text-success"><button class="btn btn-small btn-success">Crear nuevo</button></ins></a>        
      </div>
    </div>

  {{-- star search --}}
  <form action="{{route('admin.users.index')}}" method="GET">
    <div class="row">
      <div class="col-11 pl-0">
        <div class="input-group">
          <input name="name"value="{{old('name',$name)}}" type="text" class="form-control" id="search" placeholder="Buscar por nombre">
        <a style="text-decoration:none" href="{{route('admin.users.index')}}">
          <div class="input-group-prepend">
            <div class="input-group-text">x</div>
          </div>
        </a>
        </div>        
      </div>
      <div class="col-1 pr-0">
        <button class="btn btn-primary">
          <svg class="bi bi-search text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
          </svg>          
        </button>
      </div>
    </div>
    </form>
  {{-- end search --}}


  @if(count($users)>0)
    <div class="row">
        <div class="pt-2 pl-2">
          <p class="text-secondary">Resuldados  @if($name) para <b>{{$name}}</b>  @endif() : [ {{$users->total()}} ] </p>     
        </div>

          <table class="table table-striped text-secondary">
              <thead>
                <tr>
                  <th >ID</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>                  
                    <div class="d-inline text-right">
                        <a href="{{route('admin.users.show',$user->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
                        <a href="{{route('admin.users.edit',$user)}}"><button class="btn btn-sm btn-outline-primary">Editar</button></a>           
                        <form class="d-inline" action="{{ route('admin.users.destroy',$user->id) }}" method="user">
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
    @else
      <div class="pt-2">
        <p class="text-secondary">No se encontraron resultados para la busqueda : <b>{{$name}}</b>
        </p>     
      </div>
    @endif



  
    
  
    </div>
</div>    



</div>
@endsection