@extends('layouts.admin_app')
@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card px-5">
            <div class="card-body pl-2">
            <p class="lead mb-0 text-secondary">Editar Post</p>
            </div>
            <div class="row">
                <div class="col-12 ml-2">
                    <form action="{{route('admin.posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @include('admin.posts.partials.form',['btn_text' =>'Actualizar','btn_type' => 'btn-info'])
                    </form>                
                </div>
            </div>
        </div>
    </div>     
</div>
@endsection