@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Banner N°{{$banner->id}}</h4></div>

                <div class="card-body">
                <div class="col-12 px-0 text-secondary">
                <div class="text-center">
                    <a href="#modal_image" data-toggle="modal" data-target="#modal_image">
                        <img src="/{{$banner->path}}" class="col-8 img-fluid mb-4"  alt="">
                    </a>                     
                </div>                   
                <p><b>Título :</b> {{$banner->title}}</p>           
                <p><b>Descripción :</b> {{$banner->description}}</p> 
                <p><b>Enlace :</b> <a href="{{$banner->link}}">{{$banner->link}}</a></p> 
                <p><b>Fecha de creación :</b> {{$banner->created_at}}</p>
                <p><b>Fecha de edición :</b> {{$banner->updated_at }}</p>
                </div>              
                    </div>                
                </div>
        </div>
    </div>
</div>

  
  <!-- Modal -->
  <div class="modal fade col-12" id="modal_image" tabindex="-1" role="dialog" aria-labelledby="modal_imageTitle" aria-hidden="true">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        
        <div class="text-center mx-auto">
            <img src="/{{$banner->path}}" class="img-fluid rounded"  alt="">
        </div>
    </div>
  </div>
{{-- modal --}}
@endsection