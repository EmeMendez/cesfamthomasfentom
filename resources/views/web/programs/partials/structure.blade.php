@extends('layouts.web_app')
@section('content')
        <div class="col-12 px-0 mx-0">
                <div class="card bg-light mx-auto">
                        <div class="card-body">
                        <h1 class="text-dark text-center">Salud {{$title}}</h1>
                        </div>
                </div>
        </div>

       <div class="row mt-5 align-items-center">
        <h4 class="text-dark mb-4 text-md-left px-3 text-center wow fadeIn"><b> Programa Salud {{$subtitle}} Thomas Fenton</b></h4>  
        <div class="col-12 d-md-none d-block text-center mb-4">
              <img class="w-100 col-8" src="/images/web/{{$image}}.png" alt="">
      </div>    
        <div class="col-12 col-md-7">
                <ul  style="font-size:15px">
                    @foreach ($array as $item)
                        <li class="li-fenton wow fadeIn">{{$item}}</li>                        
                    @endforeach
                </ul> 
        </div>
        <div class="col-5 d-md-block d-none wow fadeIn">
                <img class="w-100" src="/images/web/{{$image}}.png" alt="">
        </div>        
       </div>       
@endsection