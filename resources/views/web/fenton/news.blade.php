@extends('layouts.web_app')
@section('content')
        <div class="bg-fenton-blue py-2 mb-5">
            <h1 class="text-light text-center">Noticias @if(isset($title)) - {{$title}} @endif</h1>
        </div> 
        @if(isset($search)) 
        <p>Resultados para la busqueda : <b>{{$search}}</b></p>        
        @endif
        @include('web.posts.partials.card')
        <div class="col-12">
            {{$posts->links()}}
        </div>
@endsection