@extends('layouts.admin_app')
@section('content')
  <div class="container">     
        <div class="row">
            <div class="col-md-9 col-12 mx-auto">
              <div class="text-md-left text-center">
                @yield('title')
              </div>
              @foreach($posts as $post)
              <div class="card mt-5">
                  <div class="card-header">
                    <h5 class="card-title">{{$post->name}}</h5>
                  </div>
                  <div class="card-body">
                    <img class="col-12 px-0" src="{{$post->image}}" height="350" alt="">
                    <p class="card-text">{{$post->excerpt}}</p>
                    <p><a href="{{route('posts.show',$post->url)}}">Leer Más...</a></p>
                  </div>
              </div>
              @endforeach
              {{-- <p class="mt-3 col-12">{{$posts->links()}}</p>  --}}
            </div>
        </div>
  </div>
@endsection