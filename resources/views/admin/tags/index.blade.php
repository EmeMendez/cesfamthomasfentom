@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="mb-0 text-secondary">Lista de etiquetas</h4></div>

                <div class="card-body">
                  <a href="{{route('admin.tags.create')}}"><button class="btn btn-success mb-3">Crear nueva +</button></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- start search --}}
                    <form action="{{route('admin.tags.index')}}" method="GET">
                        <div class="row">
                          <div class="col-10 col-md-11">
                            <div class="input-group">
                              <input name="name"value="{{old('name',$name)}}" type="text" class="form-control" id="input_search" placeholder="Buscar etiqueta">
                              <a style="text-decoration:none" href="{{route('admin.tags.index')}}">
                              <div class="input-group-prepend">
                                <div class="input-group-text">x</div>
                              </div>
                            </a>
                            </div>        
                          </div>
                          <div class="col-2 col-md-1 pl-0 pl-md-3">
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




                    @if(count($tags)>0)
                    <div>
                    <p class="text-secondary my-2">Resuldados  @if($name) para <b>{{$name}}</b>  @endif() : [ {{$tags->total()}} ] </p>     
                    {{-- start table --}}
                    <div class="table-responsive-sm">
                      <table class="table mb-0">
                        <table class="table table-striped">
                          <thead class="text-secondary" >
                            <tr>
                              <th  scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">&nbsp</th>
                              <th scope="col">&nbsp</th>
                              <th scope="col">&nbsp</th>
                            </tr>
                          </thead>
                          <tbody class="text-secondary">
                            @foreach($tags as $tag)
                            <tr>
                              <td scope="col">{{$tag->id}}</td>
                              <td scope="col">{{$tag->name}}</td>
                              <td scope="col"><a href="{{route('admin.tags.show',$tag->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a></td>
                              <td scope="col"><a href="{{route('admin.tags.edit',$tag->id)}}"><button class="btn btn-sm btn-outline-info">Editar</button></a></td>

                              <td scope="col">
                                <form action="{{route('admin.tags.destroy',$tag->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')                                
                                <input type="submit" class="btn btn-sm btn-outline-danger" value="Eliminar">
                              </form>    
                              </td>

                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                        {{$tags->links()}}
                      </table>
                    </div>                        
                  {{-- end table --}}                
               
                      </div>
                    @else
                    <p class="text-secondary my-2">No se encontraron resultados para la busqueda : <b>{{$name}}</b></p>     
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
