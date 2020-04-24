@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Categoría</h4></div>

                <div class="card-body">
                    <div class="col-12">
                        <p><b>Nombre :</b> {{$category->name}}</p> 
                        <p><b>URL : </b> {{$category->url}}</p>                  
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection