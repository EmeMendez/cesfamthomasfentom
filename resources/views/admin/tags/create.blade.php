@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Etiqueta</h4></div>

                <div class="card-body">
                    <div class="col-12 px-0">
                        <form action="{{route('admin.tags.store')}}" method="POST">
                            @csrf
                            @include('admin.tags.partials.form',['btn_text' =>'Crear','btn_type' => 'btn-success'])
                        </form>               
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


