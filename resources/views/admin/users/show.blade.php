@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Usuario</h4></div>

                <div class="card-body">
                    <div class="col-12">
                        <p><b>Nombre :</b> {{$user->name}}</p> 
                        <p><b>E-mail :</b> {{$user->email}}</p>           
                        <p><b>Fecha de creación : </b> {{$user->created_at}}</p>  
                        <p><b>Fecha de actualización : </b> {{$user->updated_at}}</p>                  
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection