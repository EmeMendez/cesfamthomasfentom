@extends('layouts.backend_app')
@section('content')
  <div class="container">     
        <div class="row">
            <div class="col-md-9 col-12 mx-auto">
              <div class="text-md-left text-center">
              <h1>{{$post->name}}</h1>          
              </div>
              <div class="card mt-5">
                  <div class="card-header">
                    <h5 class="card-title">Categoría : <a href="{{route('posts.category',$post->category->url)}}">{{$post->category->name}}</a></h5>
                  </div>
                  <div class="card-body">
                    <img class="col-12 px-0" src="{{$post->image}}" height="350" alt="">
                    <p class="card-text">{{$post->excerpt}}</p>
                    <hr class="my-3">
                    <p class="card-text">{{$post->body}}</p>
                    <hr class="my-3">
                    <div class="col-12 px-0">
                        <h3>Etiquetas</h3>
                        @foreach($post->tags as $tag)
                            <a href="{{route('posts.tag',$tag->url)}}">{{$tag->name}}</a><span>&nbsp</span>
                        @endforeach
                    </div>
                    <div class="col-12 px-0">
                      <h3>Galería</h3>
                      @foreach($post->images as $image)
                    <img class="mb-5" height="400" width="600" src="{{$image->path}}" alt="">
                    
                      @endforeach
                  </div>                    
                  </div>
              </div>
            </div>
        </div>
  </div>
@endsection