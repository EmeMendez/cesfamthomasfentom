
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
                <img src="/{{$img->path}}" class="py-3" height="120" width="150"  alt=""><br>
                @endforeach
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
@endsection