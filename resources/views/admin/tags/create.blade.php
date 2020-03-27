@extends('layouts.admin_app')
@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card px-5">
            <div class="card-body pl-2">
            <p class="lead mb-0 text-secondary">Crear Nueva Etiqueta</p>
            </div>
            <div class="row">
                <div class="col-12 ml-2">
                    <form action="{{route('admin.tags.store')}}" method="POST">
                        @csrf
                        @include('admin.tags.partials.form',['btn_text' =>'Crear','btn_type' => 'btn-success'])
                    </form>                
                </div>
            </div>
        </div>
    </div>     
</div>
@endsection