
@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="text-secondary mb-0">Post</h4></div>

                <div class="card-body">
                <div class="col-12 px-0 text-secondary">
                <a href="#modal_image" data-toggle="modal" data-target="#modal_image">
                    <img src="/{{$post->image}}" class="img-fluid mb-4"  alt="">
                </a>                    
                <p><b>Nombre :</b> {{$post->name}}</p> 
                <p><b>URL :</b> {{$post->url}}</p>           
                <p><b>Usuario :</b> {{$post->user->name}}</p> 
                <p><b>Cetegoría :</b><a href="{{route('admin.categories.show',$post->category->id)}}" class="badge badge-secondary text-white ml-2" style="font-size: 13px">{{$post->category->name}}</a></p> 
                <p><b>Extracto :</b> {{$post->excerpt}}</p>
                <p><b>Contenido :</b> {!! $post->body !!}</p>
                <p><b>Estado :</b> {{$post->status}}</p>                
                <p class="h4"><b>Etiquetas Post</p>
                <div class="mb-3">
                    @foreach ($post->tags as $tag)
                <a href="{{route('admin.tags.show',$tag->id)}}" class="badge badge-primary text-white" style="font-size: 13px">{{$tag->name}}</a>
                    @endforeach  
                </div>
                                 
                <p class="h4"><b>Galería Post</p>
                <div class="row">
                    @foreach ($post->images as $img)
                    <div class="col-6">
                        <a href="#modal_gallery" data-toggle="modal" data-target="#modal_gallery"><img class="img-fluid w-100 my-2" style="height:90%" src="/{{$img->path}}" class="py-3" alt=""><br>
                        </a>
                    </div>
                @endforeach
                    </div> 
               
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
            <img src="/{{$post->image}}" class="img-fluid rounded"  alt="">
        </div>
    </div>
  </div>
{{-- modal --}}

<style>
    .objetfitcover .gallery{
    width: 100%;
    object-fit: cover;
}

</style>

<!-- Modal gallery -->
<div class="modal fade col-12" id="modal_gallery" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">  
        <div class="modal-content">
            <div class="modal-body p-0">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  @foreach ($post->images as $index => $im)                     
                  <div class="carousel-item @if($index == 0)  active @endif objetfitcover">
                    <img src="/{{$im->path}}" class="d-md-block d-none w-100 gallery" height="450px" alt="...">
                    <img src="/{{$im->path}}" class="d-block d-md-none w-100 gallery" height="180px" alt="...">

                    {{-- <div class="col-12 d-md-none  d-block px-0">
                      <img src="/{{$im->path}}" class=" img-fluid" alt="..."  style="height:230px">
                    </div> --}}
                  </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
    </div>
  </div>
  <!-- end modal gallery  -->





@endsection