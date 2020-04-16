@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Crear Nuevo Usuario</h4></div>

                <div class="card-body">
                    <div class="col-12 px-0">
                        <form id="form" action="{{route('admin.users.store')}}" method="POST">
                            @csrf
                            @include('admin.users.partials.form',['btn_text' =>'Crear','btn_type' => 'btn-success','create' => true])
                        </form>               
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection