@extends('layouts.admin_app')
@section('content')
<div class="container">
  <div class="col-10 mx-auto">

  <div class="card px-5">
    <div class="row py-3 align-items-center">
      <div class="col-9 pl-2">
        <p class="h4 text-secondary font-weight-bold">Lista de Posts </p>
      </div>
      <div class="col-3 text-right pr-2">
        <a href="{{route('admin.posts.create')}}" class="text-success"><button class="btn btn-small btn-success">Crear nuevo</button></ins></a>        
      </div>
    </div>





    {{-- star search --}}

  <form action="{{route('admin.posts.index')}}" method="GET">
    <div class="row">
      <div class="col-3 pl-0">
        <div class="input-group">
          <input name="name"value="{{old('name',$name)}}" type="text" class="form-control" id="search" placeholder="Buscar por nombre">

        </div>        
      </div>

      <div class="col-4 pl-0">
        <select name="category" class="form-control" id="category">
          <option selected disabled value="">--Seleccione categoría--</option>
          @foreach($categories as $cat)
        <option  @if(old('category',$category) == $cat->id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>         
      </div>

      <div class="col-3 pl-0">
        <select name="status" class="form-control" id="status">
          <option selected disabled value="">--Seleccione Estado--</option>
          <option @if(old('status',$status) == 'PUBLISHED') selected @endif value="PUBLISHED">Publicados</option>
          <option @if(old('status',$status) == 'DRAFT') selected @endif value="DRAFT">Borradores</option>         
        </select>         
      </div>
      
      <div class="col-1 pr-0">
        <button type="submit" class="btn btn-primary">
          <svg class="bi bi-search text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
          </svg>          
        </button>
      </div>

      <div class="col-1 pr-0">
        <a class="text-white" href="{{route('admin.posts.index')}}">
          <button type="button" class="btn btn-secondary">
            <svg class="bi bi-arrow-counterclockwise" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
            </svg> 
          </button>
        </a>

      </div>
    </div>
    </form>
  {{-- end search --}}


  @if(count($posts)>0)
    <div class="row">
        <div class="pt-2 pl-2">
          <p class="text-secondary">Resuldados  @if($name) para <b>{{$name}}</b>  @endif() : [ {{$posts->total()}} ] </p>     
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
                @foreach($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->name}}</td>
                  <td>                  
                    <div class="d-inline text-right">
                        <a href="{{route('admin.posts.show',$post->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
                        <a href="{{route('admin.posts.edit',$post)}}"><button class="btn btn-sm btn-outline-primary">Editar</button></a>           
                        <form class="d-inline" action="{{ route('admin.posts.destroy',$post->id) }}" method="POST">
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
            {{$posts->links()}}
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