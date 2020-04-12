@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="mb-0 text-secondary">Lista de posts</h4></div>

                <div class="card-body">
                  <a href="{{route('admin.posts.create')}}"><button class="btn btn-success mb-3">Crear nuevo +</button></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- start search --}}
                    <form action="{{route('admin.posts.index')}}" method="GET">
                      <div class="row">
                        <div class="col-12 col-md-6 mb-2 mb-md-0 ">
                          <div class="input-group">
                            <input name="name"value="{{old('name',$name)}}" type="text" class="form-control" id="search" placeholder="Buscar por nombre">
                  
                          </div>        
                        </div>
                  
                        <div class="col-12 col-md-5 mb-2 mb-md-0">
                          <select name="category" class="form-control" id="category">
                            <option selected disabled value="">--Seleccione categoría--</option>
                            @foreach($categories as $cat)
                          <option @if($cat->deleted_at != null)  class="text-danger" @endif  @if(old('category',$category) == $cat->id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                          </select>         
                        </div> 
                                               
                        <div class="col-6 col-md-1 text-right text-md-left d-md-block d-none ">
                          <button type="submit" class="btn btn-primary">
                            <svg class="bi bi-search text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                            </svg>          
                          </button>
                        </div>

                      </div>

                      <div class="row pt-3">
                        <div class="col-12 col-md-6 mb-2 mb-md-0">
                          <select name="status" class="form-control" id="status">
                            <option selected disabled value="">--Seleccione Estado--</option>
                            <option @if(old('status',$status) == 'PUBLISHED') selected @endif value="PUBLISHED">Publicados</option>
                            <option @if(old('status',$status) == 'DRAFT') selected @endif value="DRAFT">Borradores</option>         
                            <option @if(old('status',$status) == 'APPLY_FOR_PUBLISH') selected @endif value="APPLY_FOR_PUBLISH">Pendiente de Publicar</option>                                   
                          </select>         
                        </div>

                        <div class="col-12 col-md-5 mb-2 mb-md-0">
                          <select name="post_status" class="form-control" id="post_status">
                            <option selected disabled value="">--Seleccione Tipo--</option>
                            <option @if(old('post_status',$post_status) == 'ACTIVE') selected @endif value="ACTIVE">Activos</option>
                            <option @if(old('post_status',$post_status) == 'DELETED') selected @endif value="DELETED">Eliminados</option>
                          </select>        
                        </div>

                        <div class="col-6 col-md-1 text-right text-md-left d-md-none d-block ">
                          <button type="submit" class="btn btn-primary">
                            <svg class="bi bi-search text-white" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                            </svg>          
                          </button>
                        </div>                        
                  
                        <div class="col-6 col-md-1">
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
                    <div>
                    <p class="text-secondary my-2">Resuldados  @if($name) para <b>{{$name}}</b>  @endif() : [ {{$posts->total()}} ] </p>     
                    {{-- start table --}}
                    <div class="table-responsive-sm">
                      <table class="table mb-0">
                        <table class="table table-striped">
                          <thead class="text-secondary" >
                            <tr>
                              <th  scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Estado</th>                   
                              <th scope="col">&nbsp</th>
                              <th scope="col">&nbsp</th>
                              @can('admin.posts.destroy')
                              <th scope="col">&nbsp</th>
                              @endcan
                            </tr>
                          </thead>
                          <tbody class="text-secondary">
                            @foreach($posts as $post)
                            <tr>
                              <td scope="col">{{$post->id}}</td>
                              <td scope="col">{{$post->name}}</td>
                              <td scope="col">@if($post->status == 'DRAFT') <span class="text-dark">Borrador<span> @elseif($post->status == 'PUBLISHED') <span class="text-success">Publicado<span>@else <span style="color:orangered">Solicitud de publicar<span> @endif</td>
                              <x-admin.tables.actionbuttons :model="$post" :group="'posts'"></x-admin.tables.actionbuttons>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                        {{$posts->appends(['status' => $status,'name'=> $name, 'category'=> $category])->links()}}
                      </table>
                    </div>                        
                  {{-- end table --}}                

                                                 

                      </div>
                    @elseif($name)
                    <p class="text-secondary my-2">No se encontraron resultados para la busqueda : <b>{{$name}}</b></p>     
                    @else
                    <p class="text-secondary my-2">No se encontraron resultados</p>     
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection

