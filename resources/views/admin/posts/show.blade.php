@extends('layouts.admin_app')
@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card px-5">
            <div class="card-body pl-2">
            <p class="h4 mb-0 text-secondary font-weight-bold">Post</p>
            </div>
            <div class="row">
                <a href="#modal_image" data-toggle="modal" data-target="#modal_image">
                    <img src="/{{$post->image}}" class="px-4 pb-3 pt-1" width="800" height="400" alt="">
                </a>
                
                <div class="col-12 ml-2 text-secondary">
                <p><b>Nombre :</b> {{$post->name}}</p> 
                <p><b>URL :</b> {{$post->url}}</p>           
                <p><b>Usuario :</b> {{$post->user->name}}</p> 
                <p><b>Cetegoría :</b> {{$post->category->name}}</p> 
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
                @foreach ($post->images as $img)
                <img src="/{{$img->path}}" class="py-3" width="600" height="400" alt=""><br>
                @endforeach
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
@endsection