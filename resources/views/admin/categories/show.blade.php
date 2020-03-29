@extends('layouts.admin_app')
@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card px-5">
            <div class="card-body pl-2">
            <p class="lead mb-0 text-secondary">Categoría</p>
            </div>
            <div class="row">
                <div class="col-12 ml-2 text-secondary">
                <p>Nombre : <b>{{$category->name}}</b></p> 
                <p>Descripción : <b>{{$category->description}}</b></p>           
                <p>URL : <b>{{$category->url}}</b></p>           
                </div>

            </div>
        </div>
    </div>     
</div>
@endsection