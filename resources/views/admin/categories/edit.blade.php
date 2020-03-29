@extends('layouts.admin_app')
@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card px-5">
            <div class="card-body pl-2">
            <p class="lead mb-0 text-secondary">Editar Categoría</p>
            </div>
            <div class="row">
                <div class="col-12 ml-2">
                    <form action="{{route('admin.categories.update',$category->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        @include('admin.categories.partials.form',['btn_text' =>'Actualizar','btn_type' => 'btn-info'])
                    </form>                
                </div>
            </div>
        </div>
    </div>     
</div>
@endsection