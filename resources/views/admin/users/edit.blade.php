@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Editar Usuario</h4></div>

                <div class="card-body">
                    <div class="col-12 px-0">
                        <form action="{{route('admin.users.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" id="name" value="{{old('name',$user->name)}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" id="email" value="{{old('email',$user->email)}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                  <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
                                  <div class="col-sm-10">
                                  <button class="btn btn-info" id="btn" type="submit">Editar</button>
                                  </div>
                            </div> 
                        </form>               
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection